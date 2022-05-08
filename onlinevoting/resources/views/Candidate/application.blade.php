<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> Admin</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- plugins:css -->
      <style>
       

      #input{
        


      }

        .container{
        padding: 20px 400px;
        background-color:cadetblue;
        font-size: 3rem;
        text-align: center;
        height: 1500px;
        
      }


      .col-120 {
  float: center;
  width: 200%;
  margin-top: 6px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-size: 2rem;
}

input[type=text], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-size: 1rem
}




   
ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
   }
   
   li {
     display: inline;
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

   h1{
     padding: 20px;
     background-color: aqua;
     text-align: center
   }

         </style>
   
@include('Candidate.candidatecss')
    </head>
    <body>
  
<div class="container">
        <ul>
          <li><button><a class="button" href="{{url('/candidatehome')}}">Home</a></button></li>
          <li><button><a class="button" href="{{url('/view_position')}}">Position</a></button></li>
          <li><button><a class="button" href="{{url('/view_party')}}">Party</a></button></li>
          <li><button><a class="button" href="{{url('/apply')}}">Apply</a></button></li>
          <li><button><a class="button" href="{{url('/all_application')}}">Appllication</a></button></li>
        </ul>


        <div class="container-scroller">
   
      <div class="container-fluid page-body-wrapper">
      <div style="position: relative; top:60px; right:-130px">
        @if(session()->has('message'))
        <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">X</button>
         {{session()->get('message')}}
        </div>
        @endif
       <h1>Apply Here</h1>
       <div>
        <form style="text-align: center" action="{{url('uploadapplication')}}" method="POST" enctype="multipart/form-data">
          <div>

          @csrf
        <div class="form-group">
         <label for="name">Name</label><br>
         <div class="col-120">
         <input class="form-control" style="color: blue" type="text"  name="name" placeholder="Name"> 
         <span  style="color: red">@error('name'){{$message}}@enderror</span>
         </div>
        </div>
    
        <div class="form-group">
            <label for="email">Email</label><br>
            <div class="col-120">
            <input class="form-control" style="color: blue" type="text"  name="email" placeholder="Email"> 
            <span  style="color: red">@error('email'){{$message}}@enderror</span>
            </div>
           </div>
    
         

           <div class="form-group">
            
            <label for="phone">Phone</label><br>
            <div class="col-120">
            <input class="form-control"  style="color: blue" type="text"  name="phone" placeholder="Phone"> 
            <span  style="color: red">@error('phone'){{$message}}@enderror</span>
            </div>
           </div>

           <div class="form-group"> 
            <label for="address">Address</label><br>
            <div class="col-120">
            <input class="form-control" style="color: blue" type="text"  name="address" placeholder="Address"> 
            <span  style="color: red">@error('address'){{$message}}@enderror</span>
            </div>
           </div>

           <div class="form-group" >
            <label for="age">Age</label><br>
            <div class="col-120">
            <input  class="form-control" style="color: blue" type="text"  name="age" placeholder="Age" > 
            <span  style="color: red">@error('age'){{$message}}@enderror</span>
            </div>
           </div>


           <div class="form-group">
            <label for="p_id">Position ID</label>
            <div class="col-120">
            <input class="form-control" style="color: blue" type="text"  name="po_id" placeholder="Position ID"> 
            <span style="color: red">@error('po_id'){{$message}}@enderror</span>
            </div>
           </div>
           
           <div class="form-group">
            <label for="pa_id">Party ID</label>
            <div class="col-120">
            <input style="color: blue" class="form-control" type="text"  name="pa_id" placeholder="Party ID">
            <span  style="color: red">@error('pa_id'){{$message}}@enderror</span>
            </div>
           </div>
           
         
           
           <div class="form-group">
           <input style="text-align:center" class="form-control btn btn-success"  type="submit"  value="Save">Save
           
    
           </div>
    
        </form>
      </div>
      </div>
      </div>
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
    
    @include('Candidate.candidatescript')
      
      <!-- End custom js for this page -->
    </body>
  </html>         


