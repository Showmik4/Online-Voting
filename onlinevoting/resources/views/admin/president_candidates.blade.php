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
         

          @csrf
        <div>
         <label>Name</label>
         <input style="color: blue" type="text"  name="name" placeholder="name" required> 
    
        </div>
    
        <div>
            <label>Position</label>
            <input style="color: blue" type="text"  name="position" placeholder="Position" required> 
       
           </div>
    
         

           <div>
            <label>Image</label>
            <input style="color: blue" type="file"  name="image"  required> 
       
           </div>
           
         
           
           <div>
           <input style="color: black" type="submit" value="Save">
    
           </div>
    
        </form>

      
        <div id="d1">
      <div style="background-color: black">
        <table style="color: blue">
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
           
               <td style="padding: 30px"><img height="100px" width="100px" src="/presidentimage/{{$datas->image}}"> </td>
               <td style="padding: 30px"> {{$datas->total_votes}} </td>
               <td style="padding: 30px"><a href="{{url('/delete_president',$datas->id)}}">Delete</a></td>
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


