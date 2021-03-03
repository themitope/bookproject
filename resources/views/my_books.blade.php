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
            @if(count($my_books) > 0)
                <my-books :my_books="{{json_encode($my_books)}}"></my-books>
                {{$my_books->links()}}
            @else
                <p>You have no books yet</p>
            @endif
            @include('layouts/footer')
        </div>
    </main>
@endsection