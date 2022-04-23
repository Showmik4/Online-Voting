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
          width: 980px;height: 4000px;
          overflow: scroll;
        }

        input[type=text]select{
        
          width: 20%;
          padding: 6px 10px;
          margin: 8px;
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
      
        <div id="d1">
          <h1>Application Data</h1>
      <div style="background-color: black">
        <table style="color: blue" class="table">
        <tr align="center">
         <th style="padding: 30px">Name</th>
  
         <th style="padding: 30px">Email</th>


       
         <th style="padding: 30px">Phone</th>
        
         <th style="padding: 30px">Address</th>
         <th style="padding: 30px">Age</th>
         <th style="padding: 30px">Position ID</th>
         <th style="padding: 30px">Party ID</th>
        </tr>
       
  
          @foreach ($data as $datas)
              <tr>
               <td style="padding: 30px"> {{$datas->name}} </td>
               <td style="padding: 30px"> {{$datas->email}} </td>
               <td style="padding: 30px"> {{$datas->phone}} </td>
               <td style="padding: 30px"> {{$datas->address}} </td>
               <td style="padding: 30px"> {{$datas->age}} </td>
               <td style="padding: 30px"> {{$datas->po_id}} </td>
               <td style="padding: 30px"> {{$datas->pa_id}} </td>
                      
               <td  style="padding: 30px"><a href="{{url('/delete_president',$datas->id)}}">Delete</a></td>
               <td style="padding: 30px"><a href="{{url('/Update_president',$datas->id)}}">Update</a></td>
              </tr >
          @endforeach
      
  
       
  
  
        </table>
     
      </div>

        </div>
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
    
      @include('Candidate.candidatescript')
      
      <!-- End custom js for this page -->
    </body>
  </html>         


