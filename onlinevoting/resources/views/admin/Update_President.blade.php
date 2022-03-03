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
    
        <form action="{{url('edit_president',$data->id)}}" method="POST" enctype="multipart/form-data">
         
            @csrf
            <div style="padding: 20px">
         <label> Name </label>
         <input type="text" name="name"  style="color: black" value="{{$data->name}}" />
            </div>

            <div style="padding: 20px">
                <label>Position </label>
                <input type="text" name="position" style="color: black" value="{{$data->position}}" />
                   </div>

                   
           
                   


                   

                           <div style="padding: 20px">
                            <label>Old Image</label>
                            <img height="100" width="100" src="presidentimage/{{$data->image}}"/>
                               </div>
     
                       <div style="padding: 20px">
                        <label>Image</label>
                        <input type="file" name="image" value="{{$data->image}}" />
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