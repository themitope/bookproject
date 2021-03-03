@extends('layouts.app')

@section('content')
    @include('layouts/navbar')
    <main class="content">
        <div class="container">
            <create-book></create-book>
            @include('layouts/footer')
        </div>
    </main>
@endsection