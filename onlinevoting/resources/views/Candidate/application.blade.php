<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> Admin</title>
      <!-- plugins:css -->
      <style>
        #d1{
          width: 800px;height:300px;
          overflow: scroll;
        }

        input[type=text]select{
        
          width: 40%;
          padding: 10px 12px;
          margin: 10px;
          display: inline-block;

          

        }
         </style>
      @include('Candidate.candidatecss')

    </head>
    <body>
   
        <div class="container-scroller">
      @include('Candidate.csidebar')
      <div class="container-fluid page-body-wrapper">
      <div style="position: relative; top:60px; right:-130px">
        @if(session()->has('message'))
        <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">X</button>
         {{session()->get('message')}}
        </div>
        @endif
       <h1>Apply Here</h1>
        <form action="{{url('uploadapplication')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">

          @csrf
        <div>
         <label>Name</label>
         <input class="form-control" style="color: blue" type="text"  name="name" placeholder="Name" required> 
    
        </div>
    
        <div>
            <label>Email</label>
            <input class="form-control" style="color: blue" type="text"  name="email" placeholder="Email" required> 
       
           </div>
    
         

           <div>
            <label>Phone</label>
            <input class="form-control" style="color: blue" type="text"  name="phone" placeholder="Phone"  required> 
       
           </div>

           <div>
            <label>Address</label>
            <input class="form-control" style="color: blue" type="text"  name="address" placeholder="Address"  required> 
       
           </div>

           <div>
            <label>Age</label>
            <input class="form-control" style="color: blue" type="text"  name="age" placeholder="Age"  required> 
       
           </div>


           <div>
            <label>Position ID</label>
            <input class="form-control" style="color: blue" type="text"  name="po_id" placeholder="Position ID"  required> 
       
           </div>
           
           <div>
            <label>Party ID</label>
            <input class="form-control" style="color: blue" type="text"  name="pa_id" placeholder="Party ID"  required> 
       
           </div>
           
         
           
           <div>
           <input  class="btn btn-info" style="color: black" class="btn btn-info" type="submit" value="Save">
           
    
           </div>
    
        </form>
      </div>
      
      
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
    
      @include('Candidate.candidatescript')
      
      <!-- End custom js for this page -->
    </body>
  </html>         


