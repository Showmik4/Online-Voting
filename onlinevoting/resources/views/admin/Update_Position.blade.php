<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    <base href="/Public">
   
    <!-- plugins:css -->
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
    
        <form action="{{url('edit_position',$data->id)}}" method="POST" enctype="multipart/form-data">
         
            @csrf
            <div style="padding: 20px">
         <label>Description </label>
         <input  type="text" name="description"  style="color: black" value="{{$data->description}}" />
            </div>

            <div style="padding: 20px">
                <label>Max Vote</label>
                <input type="text" name="max_votes" style="color: black" value="{{$data->max_votes}}" />
                   </div>

                 
            <div style="padding: 20px">
                <label>Priority</label>
                <input type="text" name="priority" style="color: black" value="{{$data->priority}}" />
                   </div>
  
           
                   


                   


                           <div style="padding: 20px">
                            
                            <input type="submit" class="btn btn-success" />
                               </div>
        </form>
   
    </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
    
    <!-- End custom js for this page -->
  </body>
</html>