<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <title>Ballot</title>
      <style>
      table,tr,th,tbody{
        background-color:#484848;
        border: 4px black;
        text-align: left;
        font-size: 1rem
    
      
      }

      .body{
        height:2000px;
        width: 1120px;
        background-color:skyblue;
        text-align: center;
      
      }

      button{

        position:relative

        text-align: center
      }

      .container{

        height: 2500px;
       
      }

      #voted{
        padding: 5px;
        font-size: 15px;
        background-color: green;
        border-radius: 5px;
      }

      .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
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
        </style>
      <!-- plugins:css -->
      @include('user.usercss')
    </head>
    <body>
      <main class="py-5 my-5">
        <div class="container-scroller">
     

     


<br>

<br>

    

<div class="container">

  @if(session()->has('message'))
        <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">X</button>
         {{session()->get('message')}}
        </div>
        @endif

  <h2 class="w3-container w3-teal" style="text-align:center"><a class="button" href="{{url('/get_home')}}">Home</a></h2>

      <form class="" action="{{url('addvote')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="body">
       
          @foreach ($users as $userdata)

          <div class="card">
            Give Vote Here <img src="Images/Vote1.jpg" alt="John" style="width:100%">
          
            <h1>{{$userdata->name}}</h1>
            <p class="title">Voter</p>
            <p>{{$userdata->email}}</p>
            <p>{{$userdata->phone}}</p>
            <p>{{$userdata->address}}</p>
           
          </div>
          
         

        
         
          

          @endforeach
        
           
       
      <br>
     
        <br>
         
        <br>
   

      <table class="table">
        <thead>
          <tr>
           
            <th>Candidate Name</th>
            <th>Images</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         
        @foreach ($data as $datas)
            
        

            <tr>
              <td>{{$datas->name}}</td>
              <td ><img style="width:100px; height:100px" src="/presidentimage/{{$datas->image}}"/> </td>
              <td>
                <label class="voteRadio">
                  <input type="radio" name="total_votes" value="{{$datas->id}}" required >
                  <label>
                    <span>Select for Vote</span>
                    <span>Selected</span>
                  </label>
                </label>
              </td>
            </tr>

            @endforeach
        </tbody>
      </table>
      <br>
      <hr>
      <br>
      <input type="checkbox" name="dec" value="1" required><span> I Accept all voter T&C and I give vote with my own opinion </span>
      <br>
      @foreach ($users as $userdata)
      @if($userdata->status == 0)
      <button type="submit" class="btn btn-primary" value="vote">Give Vote</button>
      @elseif($userdata->status ==1)
      <button disabled type="submit" class="btn btn-primary" value="vote" id="voted" >Voted</button>
      @endif
      @endforeach 
      </form>
      
   
    <!--<span class="text-success font-weight-bold"><i class="fa fa-check text-success fa-2x"></i>   </span>-->
  

   
</div>
</div>

        </div>
     
      </main>
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('user.userscript')
      
      <!-- End custom js for this page -->
    </body>

    
  </html>          


