<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookReturn;
use App\Models\Loan;
use Illuminate\Http\Request;

class DashboardLoanController extends Controller
{
    public function index(){
        return view('dashboard.loans.index',[
            'loans' => Loan::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function pinjam($slug) {
        return view('dashboard.loans.loans', [
            'data' => Book::where('slug', $slug)->first(),
            'books' => Book::all(),
        ]);
    }

    public function confirmPinjam(Request $request){
        $validatedData = $request->validate([
            'buku_id' => 'required',
            'tgl_pinjam' => 'required',
        ]);

        $tgl_pinjam = date('Y-m-d', strtotime($validatedData['tgl_pinjam']));

        $dataToStore = [
            'buku_id' => $validatedData['buku_id'],
            'tgl_pinjam' => $tgl_pinjam,
            'user_id' => auth()->user()->id,
            'status' => 1
        ];

        Loan::create($dataToStore);

        return redirect('/dashboard/books')->with('success', 'Do Loan Successfully!');
    }

    public function management(){
        return view('dashboard.loans.return',[
            'loans' => Loan::latest()->get(),
        ]);
    }

    public function grantLoan($id){
        $loan = Loan::where('id', $id)->first();
        $book = Book::where('id', $loan->buku_id)->first();

        if ($loan) {
            $statusawal = $loan->status;
            $stokAwal = $book->stok;

            $statusAkhir = $statusawal + 1;
            $stokAkhir = $stokAwal - 1;

            if($stokAkhir <= 0) {
                return redirect('/dashboard/loans/management')->with('error', 'Book stok is out of stok');
            }else{
                $dataLoan = [
                    'status' => $statusAkhir,

                ];

                $dataBook = [
                    'stok' => $stokAkhir
                ];

                Loan::where('id', $id)->update($dataLoan);
                Book::where('id', $book->id)->update($dataBook);

                return redirect('/dashboard/loans/management')->with('success', 'Loan updated successfully');
            }
        } else {
            return redirect('/dashboard/loans/management')->with('error', 'Book not found');
        }
    }

    public function addBookReturn($id) {
        $data = [
            'id_pinjam' => $id,
            'tgl_pengembalian' => now()->format('Y-m-d'),
        ];

        BookReturn::create($data);
    }

    public function grantReturn($id){
        $loan = Loan::where('id', $id)->first();
        $book = Book::where('id', $loan->buku_id)->first();

        if ($loan) {
            $statusawal = $loan->status;
            $stokAwal = $book->stok;

            $statusAkhir = $statusawal + 1;
            $stokAkhir = $stokAwal + 1;


                $dataLoan = [
                    'status' => $statusAkhir,

                ];

                $dataBook = [
                    'stok' => $stokAkhir
                ];

                $this->addBookReturn($id);
                Loan::where('id', $id)->update($dataLoan);
                Book::where('id', $book->id)->update($dataBook);

                return redirect('/dashboard/loans/management')->with('success', 'Loan updated successfully');

        } else {
            return redirect('/dashboard/loans/management')->with('error', 'Book not found');
        }
    }

    public function returnedHistory(){
        $bookReturns = BookReturn::all();

        $returnedHistory = [];

        foreach ($bookReturns as $bookReturn) {
            $loan = $bookReturn->loan;

            if ($loan && $loan->user_id === auth()->user()->id) {
                $returnedHistory[] = $bookReturn;
            }
        }

        return view('dashboard.loans.historyReturned', [
            'returnedHistory' => $returnedHistory,
        ]);
    }
}
