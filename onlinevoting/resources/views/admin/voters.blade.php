<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> Admin</title>
      <style>
       #d1{
         width: 800px;height: 200px;
         overflow: scroll;

     
       }

       table{
         background-color: aquamarine
       }
.body{

  background-color: antiquewhite
}

        </style>
      <!-- plugins:css -->
      @include('admin.admincss')
    </head>
    <body class="body">
  
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

        <form action="{{url('uploadvoter')}}" method="POST" enctype="multipart/form-data">

          <div class="form-group">
          @csrf
        <div class="col-xs-4">
         <label for="name"><P>Name</P></label>
         <input style="color: blue" type="text"  class="form-control"  name="name" placeholder="name" required> 
    
        </div>
    
        <div class="col-xs-4">
            <label for="email">Email</label>
            <input style="color: blue" type="text"  class="form-control" name="email" placeholder="Email" required> 
       
           </div>
    
         

           <div class="col-xs-4">
            <label for="phone">Phone</label>
            <input style="color: blue" type="text"  class="form-control" name="phone" placeholder="Phone" required> 
       
           </div>
           
           <div class="col-xs-4">
            <label for="address">Adress</label>
            <input style="color: blue" type="text"  class="form-control" name="address" placeholder="Address" required> 
       
           </div>

           <div class="col-xs-4">
            <label for="password">Password</label>
            <input style="color: blue" type="text"  class="form-control" name="password" placeholder="Password"  required> 
       
           </div>
           
         
           
           <div>
           <input style="color: black" class="btn btn-info" type="submit" value="Save">
    
           </div>
          
        </form>
      </div>

        <div id="d1">
      <div class="container" >
      <div style="background-color: black;text-align:center">
        <table style="color: blue" class="table">
        <tr align="center">
         <th style="padding: 30px" >Name</th>
  
         <th style="padding: 30px">Email</th>


       
         <th style="padding: 30px">Phone</th>
         <th style="padding: 30px">Addres</th>
       
         <th style="padding: 30px">Delete</th>
         <th style="padding: 30px">Update</th>
        </tr>
       
  
          @foreach ($data as $datas)
              <tr>
               <td style="padding: 30px"> {{$datas->name}} </td>
               <td style="padding: 30px"> {{$datas->email}} </td>
           
               
               <td style="padding: 30px"> {{$datas->phone}} </td>
               <td style="padding: 30px"> {{$datas->address}} </td>
              
               <td style="padding: 30px" ><a class="btn btn-danger" href="{{url('/delete_voter',$datas->id)}}">Delete</a></td>
               <td style="padding: 30px"><a class="btn btn-success" href="{{url('/update_voters',$datas->id)}}">Update</a></td>
              </tr >
          @endforeach
      
  
       
  
  
        </table>
      </div>
      </div>
      </div>
        </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('admin.adminscript')
      
      <!-- End custom js for this page -->
    </body>

    
  </html>         


