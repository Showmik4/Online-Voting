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
          width: 980px;height: 4000px;
          overflow: scroll;
        }
         </style>-->
      @include('admin.admincss')

    </head>
    <body>
   
        <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
      <div style="position: relative; top:60px; right:-130px">
       
  
      
        <div id="d1">
          <h1>Application Data</h1>
      <div style="background-color: black;text-align:center">
        <table style="color: blue" class="table">
        <tr align="center">
         <th style="padding: 30px">Name</th>
  
         <th style="padding: 30px">Email</th>


       
         <th style="padding: 30px">Phone</th>
        
         <th style="padding: 30px">Address</th>
         <th style="padding: 30px">Age</th>
         <th style="padding: 30px">Position </th>
         <th style="padding: 30px">Party </th>
        </tr>
       
  
          @foreach ($data as $datas)
              <tr>
               <td style="padding: 30px"> {{$datas->name}} </td>
               <td style="padding: 30px"> {{$datas->email}} </td>
               <td style="padding: 30px"> {{$datas->phone}} </td>
               <td style="padding: 30px"> {{$datas->address}} </td>
               <td style="padding: 30px"> {{$datas->age}} </td>
               <td style="padding: 30px"> {{$datas->description}} </td>
               <td style="padding: 30px"> {{$datas->name}} </td>
                      
           
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


