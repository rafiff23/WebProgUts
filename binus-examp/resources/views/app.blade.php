<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Binus - Examp</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <nav class="nav" >
        <h4 class="logo">
            Book.com
        </h4>
        <div class="group-link">
            <a class="nav-link" href="/">Home</a>
            <div href="" class="nav-link">
                Category
                <ul class="pop-up">
                    @foreach ($categories as $item)
                        <li><a href="/category/{{ $item->id }}">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <a class="nav-link" href="/publisher">Publisher</a>
            <a class="nav-link" href="/contact">Contact</a>
        </div>
    </nav>

    @yield('content')
    
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>