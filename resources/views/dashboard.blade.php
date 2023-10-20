@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">

                    <!-- Bookmark Ends-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">@if (Auth::user()->role == 'admin' )
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">

                            <div class="align-self-center text-center"><i data-feather="book"></i></div>
                            <div class="media-body">
                                <span class="m-0">Penerbit</span>
                                <h4 class="mb-0 counter"></h4>
                                <i class="icon-bg" data-feather="book"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                            <div class="media-body">
                                <span class="m-0">Data Pengguna</span>
                                <h4 class="mb-0 counter"></h4>
                                <i class="icon-bg" data-feather="user-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                    <div class="cal-date-widget card-body">
                        <div class="row">
                            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                <div class="cal-info text-center">
                                    <div>
                                        <h2>HELLO!</h2>
                                        <div class="d-inline-block"><span class="b-r-dark pe-3">Welcome</span><span class="ps-3">{{ Auth::user()->role == 'admin' ? 'Admin' : (Auth::user()->role =='user' ? 'User' : 'Unknown') }}</span></div>
                                        <p class="f-16 justify-allign-center">Halo {{ Auth::user()->name }}, Ini adalah halaman dashboard. Jangan lupa jaga kesehatan, ya! Ayo baca buku! </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                <div class="cal-datepicker">
                                    <div class="datepicker-here float-sm-end" data-language="en"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div></div></div></div>

        @include('layout.footer')
        @include('layout.js')
