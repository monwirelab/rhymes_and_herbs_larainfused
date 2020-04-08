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
        <!--slider-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>monwirelab.com</title>
    </head>

        <!-- NAVIGATION BAR -->
        <nav class="navcontent">
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