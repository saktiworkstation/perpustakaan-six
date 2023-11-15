<!-- navigation -->
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custom ">
    <div class="container">
        <!-- logo -->
        <a class="navbar-brand title" href="#hero-section"><span class="first">Oasis</span><span
                class="second">pavilion</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- search -->
            <form class="d-flex" role="search">
                <input class="form-control me-2 search-box" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-search-custom" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>

            <!-- navlink -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav-custom">
                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom active-custom" aria-current="page" href="#content-section">Book
                        list</a>
                </li>
                <li class="nav-item dropdown nav-item-custom">
                    <a class="nav-link nav-link-custom dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu dropdown-custom">
                        <div class="row">
                            <div class="col-2">
                                <ul class="theme-category">
                                    <h2 class="drop-title">Theme</h2>
                                    <li><a class="dropdown-item item-custom" href="#">Novels</a></li>
                                    <li><a class="dropdown-item item-custom" href="#">Prose</a></li>
                                    <li><a class="dropdown-item item-custom" href="#">Short Story</a></li>
                                    <li><a class="dropdown-item item-custom" href="#">Essay</a></li>
                                </ul>
                            </div>
                            <div class="col-10">
                                <ul class="genre-category row">
                                    <h2 class="drop-title">Genre</h2>
                                    <div class="col-3">
                                        <li><a class="dropdown-item item-custom" href="#">Action</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Adventure</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Comedy</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Drama</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Fantasy</a></li>
                                    </div>
                                    <div class="col-3">
                                        <li><a class="dropdown-item item-custom" href="#">Romance</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Gore</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Historical</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Horror</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Thriller</a></li>
                                    </div>
                                    <div class="col-3">
                                        <li><a class="dropdown-item item-custom" href="#">Fanfiction</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Sci-fi</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Realistic Fiction</a>
                                        </li>
                                        <li><a class="dropdown-item item-custom" href="#">Suspense</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Mystery</a></li>
                                    </div>
                                    <div class="col-3">
                                        <li><a class="dropdown-item item-custom" href="#">Encyclopedia</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Biography</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Anthology</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Self Improvment</a></li>
                                        <li><a class="dropdown-item item-custom" href="#">Religion</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#booking-section">Booking</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="#about-us">About us</a>
                </li>
            </ul>

            {{-- Modal Sign In --}}
            <button type="button" class="btn btn-login-custom" data-bs-toggle="modal" data-bs-target="#myModal"
                data-bs-whatever="@getbootstrap">Sign in</button>
            <div class="modal fade backdrop-custom" id="myModal" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <button type="button" class="btn-close close-custom" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-dialog modal-dialog-custom">
                    <div class="modal-content modal-custom">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 title-modal-custom">Sign In</h1>
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                        <div class="modal-body modal-body-custom">
                            <div class="row row-modal-custom ">
                                <div class="col-6 col-modal-custom">
                                    <button class="btn btn-modal-login-custom"><a href="">Sign in</a></button>
                                </div>
                                <div class="col-6 col-modal-custom">
                                    <button class="btn btn-modal-regis-custom" data-bs-toggle="modal"
                                        data-bs-target="#myModal-regis" data-bs-whatever="@getbootstrap">Sign
                                        up</button>
                                </div>
                            </div>
                            <form action="/login" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="col-form-label label-custom">Email</label>
                                    <input type="email" name="email"
                                        class="form-control form-custom @error('email') is-invalid @enderror"
                                        id="email" placeholder="name@example.com" value="{{ old('email') }}"
                                        required autofocus id="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label label-custom">Password</label>
                                    <input type="password" name="password"class="form-control form-custom"
                                        id="password" placeholder="Password" required></input>
                                </div>
                                {{-- <p>Forgot <a href="#">Password</a>?</p> --}}

                                <button type="submit" class="btn btn-primary btn-primary-custom">Sign in</button>
                            </form>
                            <!-- <button type="button" class="btn btn-secondary btn-secondary-custom" data-bs-dismiss="modal">Close</button> -->
                            <p class="text-center">don't have an account yet? <a href=""
                                    data-bs-toggle="modal" data-bs-target="#myModal-regis"
                                    data-bs-whatever="@getbootstrap">register </a>now</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Sigin Up --}}
            <button type="button" class="btn btn-regis-custom" data-bs-toggle="modal"
                data-bs-target="#myModal-regis" data-bs-whatever="@getbootstrap">Sign up</button>
            <div class="modal fade backdrop-custom" id="myModal-regis" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <button type="button" class="btn-close close-custom" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-dialog modal-dialog-custom">
                    <div class="modal-content modal-custom">
                        <div class="modal-header">
                            <Sign class="modal-title fs-5 title-modal-custom">Sign Up</h1>
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                        </div>
                        <div class="modal-body modal-body-custom">
                            <div class="row row-modal-custom ">
                                <div class="col-6 col-modal-custom">
                                    <button type="button" class="btn btn-modal-regis-custom custom-rounded"
                                        data-bs-toggle="modal" data-bs-target="#myModal"
                                        data-bs-whatever="@getbootstrap">Sign in</button>
                                </div>
                                <div class="col-6 col-modal-custom">
                                    <button type="button" class="btn btn-modal-login-custom custom-rounded-2"><a
                                            href="">Sign up</a></button>
                                </div>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label label-custom">Email</label>
                                    <input type="text" class="form-control form-custom" id="recipient-name"
                                        placeholder="Enter Email">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label label-custom">Fullname</label>
                                    <input class="form-control form-custom" id="message-text"
                                        placeholder="Enter Name"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label label-custom">Password</label>
                                    <input type="password" class="form-control form-custom" id="message-text"
                                        placeholder="Enter Password"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label label-custom">Confirm
                                        Password</label>
                                    <input type="password" class="form-control form-custom" id="message-text"
                                        placeholder="Confirm Password"></input>
                                </div>
                            </form>
                            <button type="submit" class="btn btn-primary btn-primary-custom">Sign up</button>
                            <p class="text-center">already have an account? <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#myModal" data-bs-whatever="@getbootstrap">login </a>now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
