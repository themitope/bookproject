@extends('layouts.app')

@section('content')
    @include('layouts/navbar')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <a href="../all_books" class="btn btn-primary">All Books</a>
                </div>
            </div>
            <view-book :book_details="{{json_encode($book_details)}}"></view-book>
            @include('layouts/footer')
        </div>
    </main>
@endsection