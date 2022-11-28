@extends('app')

@section('content')
    <div class="detail-container">
        <div class="img" style="background-image: url('{{ asset('storage/'. $book->image) }}');" ></div>
        <div class="detail-content">
            <p class="author">By {{ $book->author }} | {{ $book->year }}</p>
            <h3 class="title">{{ $book->title }}</h3>
            <p class="description">{{ $book->synopsis }}</p>
        </div>
    </div>
@endsection