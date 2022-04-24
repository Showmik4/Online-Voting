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
         <!--#d1{
          width: 800px;height:300px;
          overflow: scroll;
        }

        input[type=text]select{
        
          width: 20%;
          padding: 6px 10px;
          margin: 8px;
          display: inline-block;

          

        }

        table{
        
            background-color: aqua;

        }
         </style>
      @include('Candidate.candidatecss')

    </head>
    <body>
   
        <div class="container-scroller">
      @include('Candidate.csidebar')
      <div class="container-fluid page-body-wrapper">
      <div style="position: relative; top:60px; right:-130px">
      
        <div id="d1">
          <h1>Application Data</h1>
      <div style="background-color: black;text-align:center">
        <table style="color: blue" class="table">
        <tr>
         <th style="padding: 30px">Name</th>
  
         <th style="padding: 30px">Email</th>


       
         <th style="padding: 30px">Phone</th>
        
         <th style="padding: 30px">Address</th>
         <th style="padding: 30px">Age</th>
         <th style="padding: 30px">Position ID</th>
         <th style="padding: 30px">Party ID</th>
         <th style="padding: 30px">Status</th>
         <th style="padding: 30px">Delete</th>
         <th style="padding: 30px">Update</th>
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
               <td style="padding: 30px"> {{$datas->status}} </td>
                      
               <td  style="padding: 30px"><a class="btn btn-danger"  href="{{url('/delete_president',$datas->id)}}">Delete</a></td>
               <td style="padding: 30px"><a class="btn btn-success" href="{{url('/Update_president',$datas->id)}}">Update</a></td>
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


