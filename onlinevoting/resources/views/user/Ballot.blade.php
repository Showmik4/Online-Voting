<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Ballot</title>
      <style>
      
        </style>
      <!-- plugins:css -->
      @include('user.usercss')
    </head>
    <body>
      <main class="py-5 my-5">
        <div class="container-scroller">
      @include('user.sidebar')

     


<br>

<br>
@foreach ($users as $userdata)
    

<div class="container">
  @if($userdata->vote_status == 0)
      <form class="" action="{{url('addvote')}}" method="post" enctype="multipart/form-data">
        @csrf
      <h3>Online Voting Program</h3>
      <br>
     
        <br>
         
        <br>
   

      <table class="table table-borderless">
        <thead>
          <tr>
           
            <th>Topic Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         
        @foreach ($data as $datas)
            
       

            <tr>
              <td>{{$datas->name}}</td>
             
              <td>
                <label class="voteRadio">
                  <input type="radio" name="total_votes" value="{{$datas->id}}" required >
                  <label>
                    <span>Select for Vote</span>
                    <span>Selected</span>
                  </label>
                </label>
              </td>
            </tr>

            @endforeach
        </tbody>
      </table>
      <br>
      <hr>
      <br>
      <input type="checkbox" name="dec" value="1" required><span> I Accept all voter T&C and I give vote with my own opinion </span>
      <br>
      <button type="submit" class="btn btn-primary">Give Vote</button>
      </form>
      
    @elseif($data->vote_status == 'voted')
    <span class="text-success font-weight-bold"><i class="fa fa-check text-success fa-2x"></i>   </span>
    @endif

 
</div>
@endforeach 
        </div>
     
      </main>
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('user.userscript')
      
      <!-- End custom js for this page -->
    </body>

    
  </html>         


