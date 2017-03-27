<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"> </head>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <body>
        @include('menu')
        <section class='main-section'>
            <header> </header>
            <article> 

               @yield('content')




            </article>

        </section>
    </body>
</html>