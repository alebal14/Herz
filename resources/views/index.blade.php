<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
<div id="head">
    @if(Auth::check())

         <li><a href="http://localhost/herz/public/auth/logout">Log out</a></li>
         <hr>         
         @else
         <!-- om ej inloggad -->
         <li><a href="http://localhost/herz/public/auth/login">Log In</a></li>
         <hr>
         <li><a href="http://localhost/herz/public/auth/register">Sign Up</a></li>         
         @endif 
</div>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <div class="container">
            <div class="content">

                @if(Auth::check())
  <p>{{ auth::user()->name }}        </div>
  @endif
            </div>
        </div>
    </body>
</html>
