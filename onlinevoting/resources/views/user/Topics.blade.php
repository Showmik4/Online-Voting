<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Give Vote</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>



    <header class="header p-3 bg-primary text-light">
      <center>
        <div class="container">
          <h1>Online Voting System</h1>
          <p><b>Topic : </b> What is the top PHP Framework</p>
        </div>
      </center> 
    </header>

    <main class="py-5 my-5">
      <div class="container">


        @foreach($votersData as $data)


        <h3>Welcome {{$data->Name}}</h3>
        <br><br>
          <table class="table table-borderless">
            <tr>
              <td>Voter Id</td>
              <td>:</td>
              <td>{{$data->id}}</td>
            </tr>
            <tr>
              <td>Voter Name</td>
              <td>:</td>
              <td>{{$data->name}}</td>
            </tr>
          
           
            <tr>
              <td>Voting Status</td>
              <td>:</td>
              <td>

                @if($data->status == 0)
                  <span class="font-weight-bold"><i class="fa fa-times text-danger fa-2x"></i></span>
                @elseif($data->status == 1)
                  <span class="text-success font-weight-bold"><i class="fa fa-check text-success fa-2x"></i>   </span>
                @endif

              </td>
            </tr>
          </table>
          <br>
          <br>
          @if($data->status == 0)
          <div class="alert alert-info">
            <b>Vote Incomplete !</b> Please give your vote
          </div>
          @elseif($data->status == 1)
        
          <br>
          <div class="alert alert-warning">
            <b>Vote completed !</b> We Only Accept Once Vote from each ID
          </div>

          @endif



          <br><br>




          @if($data->status == 0)
            <form class="" action="{{url('vote')}}" method="post" enctype="multipart/form-data">
              @csrf
            <h3>Online Voting Program</h3>
            <br>
            @if($errors->all()) 
              <br>
                <div class="alert alert-danger">
                    <b>Opps!</b> Vote Unsuccessful. please try again
                </div>
              <br>
            @endif

            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Topic Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0 ?>
                @foreach($topicsList as $topic)

                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$topic->Name}}</td>
                    <td>
                      <label class="voteRadio">
                        <input type="radio" name="VoteTopic" value="{{$topic->id}}" required >
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
            @endif





        @endforeach
      </div>

      <br><br>
     
    </main>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
   
  </body>
</html>
