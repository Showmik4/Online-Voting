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

         <style>
          .container{
           padding: 20px 400px;
           background-color:cadetblue;
           font-size: 2rem;
           text-align: center;
           
         }
   
         
   
   
   .button {
     background-color: #4CAF50;
     border: none;
     color: white;
     padding: 15px 32px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     margin: 4px 2px;
     cursor: pointer;
   }
   
   ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
   }
   
   li {
     display: inline;
   }

   h1{
     padding: 20px;
     background-color: aqua
   }

   </style>


      @include('Candidate.candidatecss')

    </head>
    <body>
   
      <div class="container">

        <ul>
          <li><button><a class="button" href="{{url('/candidatehome')}}">Home</a></button></li>
          <li><button><a class="button" href="{{url('/view_position')}}">Position</a></button></li>
          <li><button><a class="button" href="{{url('/view_party')}}">Party</a></button></li>
          <li><button><a class="button" href="{{url('/apply')}}">Apply</a></button></li>
          <li><button><a class="button" href="{{url('/all_application')}}">Appllication</a></button></li>
        </ul>
        <div class="container-scroller">
   
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
        </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
    
      @include('Candidate.candidatescript')
      
      <!-- End custom js for this page -->
    </body>
  </html>         


