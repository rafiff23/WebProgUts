@extends('app')

@section('content')

    <h4 class="cat" >Category : {{ $category->name }}</h4>

    <div class="book-list">
        @foreach ($category->book as $book)
        <div class="card">
            <div class="img-wrapper">
                <div class="overlay">
                    <a href="/detail/{{ $book->id }}">detail</a>
                </div>
                {{-- <p class="badges">{{ $book->bookCategory }}</p> --}}
                <div class="img" style="background-image: url('{{ asset('storage/'. $book->image) }}')" ></div>
            </div>
            <p class="title">{{ $book->title }}</p>
            <p class="author">By {{ $book->author }}</p>
        </div>
        @endforeach
    </div>
@endsection