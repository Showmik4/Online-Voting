

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Home</title>

    @include('user.usercss')
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
      @include('user.sidebar')
      
      @foreach($users as $datas)
      <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
           
                <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">{{$datas->name}}</span>  </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">{{$datas->email}}</span>  </div>
                  <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">{{$datas->phone}}</span>  </div>
                    <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">{{$datas->address}}</span>  </div>
               <!-- <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>-->
               <!-- <div class="text mt-3"> <span><br><br> </span> </div>-->
               
                <div class=" px-2 rounded mt-4 date "> <span class="join">Voter ID:{{$datas->id}}</span> </div>
                <div class=" px-2 rounded mt-4 date "> <span class="join">Vote Status:{{$datas->vote_status}}</span> </div>
      
              
                <div><a class="btn btn-success" href="{{url('give_status',$datas->id)}}">Vote</a> </div>
            </div>
        </div>
      </div>
      
      
      
      @endforeach
      
  

      </div>
   

      @include('user.userscript')
 
</body>
</html>

