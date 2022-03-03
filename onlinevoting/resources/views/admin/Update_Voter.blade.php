<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Voters</title>

    <base href="/Public">
   
    <!-- plugins:css -->
    @include('admin.admincss')
  </head>
 
  <body>
    <div class="container-scroller">

    @include('Admin.sidebar')

   
    <div class="container-fluid page-body-wrapper">
    
    <div style="position: relative; top:60px; right:-150px">
        @if(session()->has('message'))
        <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">X</button>
         {{session()->get('message')}}
        </div>
        @endif
        <form action="{{url('edit_voter',$data->id)}}" method="POST" enctype="multipart/form-data">
          
            @csrf
            <div style="padding: 20px">
         <label>Voter Name </label>
         <input type="text" name="name"  style="color: black" value="{{$data->name}}" />
            </div>

            <div style="padding: 20px">
                <label>Email </label>
                <input type="text" name="email" style="color: black" value="{{$data->email}}" />
                   </div>


                   <div style="padding: 20px">
                    <label>Phone </label>
                    <input type="text" name="phone" style="color: black" value="{{$data->phone}}" />
                       </div>



                       <div style="padding: 20px">
                        <label>Address </label>
                        <input type="text" name="address" style="color: black" value="{{$data->address}}" />
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