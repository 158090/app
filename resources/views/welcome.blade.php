<!Doctype html>
<html>
    
    <head>
        <meta charset="UTF-8"> 
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="css/bootstrap.min.css" > 
    </head>
    
    <body class="container-fluid">
        <div class="row">
            <div class="col-sm-2"></div>
            
        @include('menu')
        
        <div class="row"></div>
        </div>
         
        <section class="row">
          
           <div class="col-sm-2"></div> 
<div class="col-sm-8">
            <article class="main-section">@yield('content')</article>
</div>
            <div class="col-sm-2"></div> 

        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>