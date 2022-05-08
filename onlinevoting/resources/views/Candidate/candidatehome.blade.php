

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidate Home</title>
  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>

      .container{
        padding: 20px 400px;
        background-color:cadetblue;
        font-size: 2rem;
        text-align: center;
        
      }





.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li a {
  display: block;
  width: 150px;
  background-color: #dddddd;
}

    </style>

</head>
<body>
 
 

  
    
    <nav>
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
   
     
     
          <div class="container">
            

            <ul>
              <li><button><a class="button" href="{{url('/candidatehome')}}">Home</a></button></li>
              <li><button><a class="button" href="{{url('/view_position')}}">Position</a></button></li>
              <li><button><a class="button" href="{{url('/view_party')}}">Party</a></button></li>
              <li><button><a class="button" href="{{url('/apply')}}">Apply</a></button></li>
              <li><button><a class="button" href="{{url('/all_application')}}">Appllication</a></button></li>
            </ul>
            
            <br>
            
            
           <h1> Welcome All</h1>
  
           <div class="bg"></div>
  
           <img  src="Images/Vote1.jpg"/>
          
          </div>
  
     
  

    
   

      @include('Candidate.candidatescript')
 
</body>
</html>

