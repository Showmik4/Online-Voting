

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Home</title>

    @include('admin.admincss')
</head>
<body>
   
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
              @if(Route::has('login'))
              @auth
              <x-app-layout>
   
            </x-app-layout>
              @else
            <li class="nav-item">
              <button class="btn btn-primary"><a class="nav-link active"  href="{{route('login')}}">Login </button></a>
            </li>
            
           <li class="nav-item">
            <button class="btn btn-info"><a class="nav-link" href="{{route('register')}}">Register</button></a>
            </li>

           
            
            @endauth
            @endif

           
           
          </ul>
        </div>
      </nav>
      
      <!-- Black background with white text -->
      <!--<nav class="navbar navbar-expand-sm bg-dark navbar-dark">...</nav>
      
      <!-- Blue background with white text -->
      
      <div class="bg-image" >
      <img style="width:1600px; height:800px" src="/Images/Vote4.jpg" class="img-fluid" alt="Responsive image">
           
 </div>

      @include('admin.adminscript')

</body>
</html>

