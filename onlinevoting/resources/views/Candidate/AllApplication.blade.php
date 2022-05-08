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
        
        #d1{
         width:800px;height: 400px;
         overflow: scroll;

     
       }
        input[type=text]select{
        
          width: 20%;
          padding: 6px 10px;
          margin: 8px;
          display: inline-block;

          

        }

        .container{
           padding: 200px 600px;
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


        table{
        
            background-color: aqua;

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
    
      <div>
      
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
         <th style="padding: 30px">Position</th>
         <th style="padding: 30px">Party Name</th>
         <th style="padding: 30px">Status</th>
         <th style="padding: 30px">Delete</th>
        
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
               <td style="padding: 30px"> {{$datas->status}} </td>
                      
               <td  style="padding: 30px"><a class="btn btn-danger"  href="{{url('/delete_application',$datas->id)}}">Delete</a></td>
               
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


