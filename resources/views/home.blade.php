@extends('layouts.app')

@section('content')
<body>
    @include('layouts/navbar')
    <main class="content">
        <div class="row justify-content-md-center">
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon icon-shape icon-md icon-shape-primary rounded me-4 me-sm-0"><span class="fas fa-chart-line"></span></div>
                                <div class="d-sm-none">
                                    <h2 class="h5">Total No of My Books</h2>
                                    <h3 class="mb-1">{{$no_of_my_book}}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h5">Total No of My Books</h2>
                                    <h3 class="mb-1">{{$no_of_my_book}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon icon-shape icon-md icon-shape-secondary rounded me-4"><span class="fas fa-cash-register"></span></div>
                                <div class="d-sm-none">
                                    <h2 class="h5">Total No of All Books</h2>
                                    <h3 class="mb-1">{{$no_of_all_books}}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h5">Total No of All Books</h2>
                                    <h3 class="mb-1">{{$no_of_all_books}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon icon-shape icon-md icon-shape-secondary rounded me-4"><span class="fas fa-cash-register"></span></div>
                                <div class="d-sm-none">
                                    <h2 class="h5">Total No of Archived Books</h2>
                                    <h3 class="mb-1">{{$no_archived_books}}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h5">Total No of Archived Books</h2>
                                    <h3 class="mb-1">{{$no_archived_books}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('layouts/footer')
</main>
</body>
@endsection
