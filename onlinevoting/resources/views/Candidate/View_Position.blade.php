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
     <!-- <style>
        #d1{
          width: 900px;height: 300px;
          overflow: scroll;
        }
         </style>-->
      @include('Candidate.candidatecss')

    </head>
    <body>
   
        <div class="container-scroller">
      @include('Candidate.csidebar')
      <div class="container-fluid page-body-wrapper">
        <div style="position: relative; top:60px; right:-150px">
        <div id="d1">
            <h1>Candidate Position Table </h1>
      <div style="background-color: black;text-align:center " >
        <table style="color: blue" class="table" >
        <tr >
            <th style="padding: 30px">ID</th>
         <th style="padding: 30px">Description</th>
  
         <th style="padding: 30px">Max Votes</th>


       
         <th style="padding: 30px">Priority</th>
        
         
        </tr>
       
  
          @foreach ($data as $datas)
              <tr style="padding: 30px">
                <td style="padding: 30px"> {{$datas->id}} </td>
               <td style="padding: 30px"> {{$datas->description}} </td>
               <td style="padding: 30px"> {{$datas->max_votes}} </td>
               <td style="padding: 30px"> {{$datas->priority}} </td>
                      
               
              </tr >
          @endforeach
      
  
       
  
  
        </table>
     
      </div>

        </div>
      </div>
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
    
      @include('Candidate.candidatescript')
      
      <!-- End custom js for this page -->
    </body>
  </html>         


