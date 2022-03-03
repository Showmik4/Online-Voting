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
          width: 900px;height: 300px;
          overflow: scroll;
        }
         </style>
      @include('admin.admincss')

    </head>
    <body>
   
        <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
      <div style="position: relative; top:60px; right:-150px">
        @if(session()->has('message'))
        <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">X</button>
         {{session()->get('message')}}
        </div>
        @endif
       
        <form action="{{url('uploadpresident')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">

          @csrf
        <div>
         <label>Name</label>
         <input class="form-control" style="color: blue" type="text"  name="name" placeholder="name" required> 
    
        </div>
    
        <div>
            <label>Position</label>
            <input class="form-control" style="color: blue" type="text"  name="position" placeholder="Position" required> 
       
           </div>
    
         

           <div>
            <label>Image</label>
            <input class="form-control" style="color: blue" type="file"  name="image"  required> 
       
           </div>
           
         
           
           <div>
           <input  class="btn btn-info" style="color: black" class="btn btn-info" type="submit" value="Save">
           
    
           </div>
    
        </form>
      </div>
      
        <div id="d1">
      <div style="background-color: black">
        <table style="color: blue" class="table">
        <tr align="center">
         <th style="padding: 30px">Name</th>
  
         <th style="padding: 30px">Position</th>


       
         <th style="padding: 30px">Image</th>
         <th style="padding: 30px">Total Votes</th>
         <th style="padding: 30px">Delete</th>
         <th style="padding: 30px">Update</th>
        </tr>
       
  
          @foreach ($data as $datas)
              <tr>
               <td style="padding: 30px"> {{$datas->name}} </td>
               <td style="padding: 30px"> {{$datas->position}} </td>
           
               <td style="padding: 30px"><img class="img-rounded" alt="Cinque Terre" width="304" height="236" src="/presidentimage/{{$datas->image}}"> </td>
               <td style="padding: 30px"> {{$datas->total_votes}} </td>
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
    
      @include('admin.adminscript')
      
      <!-- End custom js for this page -->
    </body>
  </html>         


