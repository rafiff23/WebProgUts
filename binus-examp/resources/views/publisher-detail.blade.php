@extends('app')

@section('content')

    <div class="publisher-container">
        <div class="about">
            <div style="background-image: url('{{ asset('storage/'.$publisher->image) }}')" class="publisher-logo"></div>
            <div class="about-group">
                <p class="small">Name</p>
                <p class="data">{{ $publisher->name }}</p>
                <p class="small">Address</p>
                <p class="data">{{ $publisher->address }}</p>
                <p class="small">Phone</p>
                <p class="data">{{ $publisher->phone }}</p>
                <p class="small">Email</p>
                <p class="data">{{ $publisher->email }}</p>
            </div>
        </div>
        <div class="gallery">
            @foreach ($publisher->book as $book)
            <div class="card">
                <div class="img-wrapper">
                    <div class="overlay">
                        <a href="/detail/{{ $book->id }}" >detail</a>
                    </div>
                    <p class="badges">UI/UX</p>
                    <div class="img" style="background-image: url('{{ asset('storage/'.$book->image) }}')" ></div>
                </div>
                <p class="title">{{ $book->title }}</p>
                <p class="author">{{ $book->author }}</p>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection