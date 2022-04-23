

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidate Home</title>

    @include('Candidate.candidatecss')
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
              <a class="nav-link active" href="{{route('login')}}">Login</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
            
            @endauth
            @endif
           
          </ul>
        </div>
      </nav>
      <div class="container-scroller">
      @include('Candidate.csidebar')
      
     
  

      </div>
   

      @include('Candidate.candidatescript')
 
</body>
</html>

