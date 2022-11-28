@extends('app')

@section('content')

    <div class="book-list">

        @if (!empty($category))
            <h5>Category : {{ $category }}</h5>
        @endif

        @foreach ($books as $book)
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
