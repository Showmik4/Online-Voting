<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <title> Admin</title>
      <!-- plugins:css -->
    <style>


      .container{

        padding:200px 200px;
        background-color: skyblue;
        border: 2px;
        border-color: black;
        text-align: center
      }


        table{
          background-color: cadetblue
        }
         </style>
      @include('admin.admincss')

    </head>
    <body>
   
    
        <div class="container-scroller" style="height: 1000px">
    
      <div class="container-fluid page-body-wrapper">
      <div style="position: relative; top:60px; right:-130px">
       
        <div class="container">
      
        <div id="d1">
          <h2 class="w3-container w3-teal" style="text-align: right"><a class="btn btn-primary" href="{{url('/get_admin_home')}}">Home</a></h2>
          <h1 class="w3-container w3-teal" style="text-align: center">Application Data</h1>
      <div style="background-color: black;text-align:center">
        <table style="color: blue" class="table" style="text-align: center">
        <tr align="center">
         <th style="padding: 30px">Name</th>
  
         <th style="padding: 30px">Email</th>


       
         <th style="padding: 30px">Phone</th>
        
         <th style="padding: 30px">Address</th>
         <th style="padding: 30px">Age</th>
         <th style="padding: 30px">Position </th>
         <th style="padding: 30px">Party </th>
         <th style="padding: 30px">Approve </th>
         <th style="padding: 30px">Cancelled</th>
        </tr>
       
  
          @foreach ($data as $datas)
              <tr>
               <td style="padding: 30px"> {{$datas->name}} </td>
               <td style="padding: 30px"> {{$datas->email}} </td>
               <td style="padding: 30px"> {{$datas->phone}} </td>
               <td style="padding: 30px"> {{$datas->address}} </td>
               <td style="padding: 30px"> {{$datas->age}} </td>
               <td style="padding: 30px"> {{$datas->description}} </td>
               <td style="padding: 30px"> {{$datas->party_name}} </td>
               <td><a class="btn btn-success" href="{{url('approve_application',$datas->id)}}">Approved</a> </td>

               <td><a class="btn btn-danger" href="{{url('cancelled_application',$datas->id)}}">Cancelled</a> </td>     
           
              </tr >
          @endforeach
      
  
       
  
  
        </table>
     
      </div>

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


