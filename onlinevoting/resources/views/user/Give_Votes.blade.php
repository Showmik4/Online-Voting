<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.admincss');
    <title>Document</title>
</head>
<body>
    <main class="py-5 my-5">
        <div class="container">
  
  
    <form class="" action="/vote" method="post">
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
                  <input type="radio" name="total_votes"  required >
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
        </div>
    </main>
    
@include('admin.adminscript');

</body>
</html>