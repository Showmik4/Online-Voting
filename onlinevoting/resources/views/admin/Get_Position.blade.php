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
      <!--<style>
        #d1{
          width: 900px;height: 300px;
          overflow: scroll;
        }
         </style>-->
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
       
        <form action="{{url('upload_position')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">

          @csrf
        <div>
         <label>Description</label>
         <input class="form-control" style="color: blue" type="text"  name="description" placeholder="Description" required> 
    
        </div>
    
        <div>
            <label>Max Votes</label>
            <input class="form-control" style="color: blue" type="text"  name="max_votes" placeholder="Max Votes" required> 
       
           </div>
    
         

           <div>
            <label>Priorirty</label>
            <input class="form-control" style="color: blue" type="text"  name="priority" placeholder="Priorirty"  required> 
       
           </div>
           
         
           
           <div>
           <input  class="btn btn-info" style="color: black" class="btn btn-info" type="submit" value="Save">
           
    
           </div>
    
        </form>
      </div>
      
        <div id="d1">
      <div style="background-color: black;text-align:center">
        <table style="color: blue" class="table">
        <tr align="center">
         <th style="padding: 30px">Description</th>
  
         <th style="padding: 30px">Max Votes</th>


       
         <th style="padding: 30px">Priority</th>
        
         <th style="padding: 30px">Delete</th>
         <th style="padding: 30px">Update</th>
        </tr>
       
  
          @foreach ($data as $datas)
              <tr>
               <td style="padding: 30px"> {{$datas->description}} </td>
               <td style="padding: 30px"> {{$datas->max_votes}} </td>
               <td style="padding: 30px"> {{$datas->priority}} </td>
                      
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


