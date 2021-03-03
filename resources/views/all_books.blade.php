@extends('layouts.app')

@section('content')
    @include('layouts/navbar')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <a href="create_book" class="btn btn-primary">Create Book</a>
                </div>
            </div>
            @if(count($books) > 0)
                <all-books :books="{{json_encode($books)}}"></all-books>
                {{$books->links()}}
            @else
                <p>No books available yet</p>
            @endif
            @include('layouts/footer')
        </div>
    </main>
@endsection