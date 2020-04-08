@yield('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Style-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <!--jquery cdnjs-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--Popup-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
        <script type="text/javascript" src="{{ URL::asset('js/scroll.js') }}"></script>
        <title>monwirelab.com</title>
    </head>

    <body>
        <!-- NAVIGATION BAR -->
        <nav class="navcontent_pages">
            <div class="navinner">
                <ul class='navlinks'>
                    <li><a href="/">Home</a></li>
                    <li><a href="/plants">Plants</a></li>
                    <li><a href="/recipes">Recipes</a></li>
                    <li><a href="/poems">Poems</a></li>
                    <li><a href="/about_me">About Me</a></li>
                </ul>
            </div>
        </nav>

        <!-- PAGE HEADING -->
        <header class="rh-case">
            <img src="Photos/logo.png">
            <h1>Rhymes & Herbs</h1>
            <p>by Maria Clara</p>
        </header>