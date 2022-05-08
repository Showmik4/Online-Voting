<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    body{margin-top:20px;
        background-color: #eee;
        }
        
        .search-result-categories>li>a {
            color: #b6b6b6;
            font-weight: 400
        }
        
        .search-result-categories>li>a:hover {
            background-color: #ddd;
            color: #555
        }
        
        .search-result-categories>li>a>.glyphicon {
            margin-right: 5px
        }
        
        .search-result-categories>li>a>.badge {
            float: right
        }
        
        .search-results-count {
            margin-top: 10px
        }
        
        .search-result-item {
            padding: 20px;
            background-color: #fff;
            border-radius: 4px
        }
        
        .search-result-item:after,
        .search-result-item:before {
            content: " ";
            display: table
        }
        
        .search-result-item:after {
            clear: both
        }
        
        .search-result-item .image-link {
            display: block;
            overflow: hidden;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px
        }
        
        @media (min-width:768px) {
            .search-result-item .image-link {
                display: inline-block;
                margin: -20px 0 -20px -20px;
                float: left;
                width: 200px
            }
        }
        
        @media (max-width:767px) {
            .search-result-item .image-link {
                max-height: 200px
            }
        }
        
        .search-result-item .image {
            max-width: 100%
        }
        
        .search-result-item .info {
            margin-top: 2px;
            font-size: 12px;
            color: #999
        }
        
        .search-result-item .description {
            font-size: 13px
        }
        
        .search-result-item+.search-result-item {
            margin-top: 20px
        }
        
        @media (min-width:768px) {
            .search-result-item-body {
                margin-left: 200px
            }
        }
        
        .search-result-item-heading {
            font-weight: 400
        }
        
        .search-result-item-heading>a {
            color: #555
        }
        
        @media (min-width:768px) {
            .search-result-item-heading {
                margin: 0
            }
        }

      
      }


      .col-120 {
  float: center;
  width: 200%;
  margin-top: 6px;
}


.container{
    background-color: cadetblue
}




   
ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
   }
   
   li {
     display: inline;
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

   h1{
     padding: 20px;
     background-color: aqua;
     text-align: center
   }

</style>



</head>
<body>
  
 
    <div class="container" style="height: 1000px" >

        <ul>
            <li><button><a class="button" href="{{url('/home')}}">Home</a></button></li>
            <li><button><a class="button" href="{{url('/voters')}}">Voters</a></button></li>
            <li><button><a class="button" href="{{url('/applicants')}}">Applicants</a></button></li>
            <li><button><a class="button" href="{{url('/viewpcandidate')}}">Candidate</a></button></li>
            <li><button><a class="button" href="{{url('/get_application')}}">Appllication</a></button></li>
          </ul>
        <div class="row ng-scope">
           <div style="position: relative; top:10px; right:-300px">
            <div class="col-md-9 col-md-pull-3">
             
                @foreach ($data as $datas)
                    
               
                <section class="search-result-item">
                     <a class="image-link" href="#"><img class="img-rounded" alt="Cinque Terre" width="304" height="236" src="/presidentimage/{{$datas->image}}">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="search-result-item-heading"><a href="#">{{$datas->name}}</a></h4>
                                <p class="info">{{$datas->position}}</p>
                                <p style="color: red" class="info">Total Votes:{{$datas->total_votes}}</p>
                            </div>
                           
                        </div>
                    </div>
                </section>
                @endforeach
              
            </div>
        </div>
        </div>
    </div>
 
    
       
</body>
</html>