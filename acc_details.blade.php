<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard | Open</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <style>
  .content{
    background: white;
    border-radius:20px;
    /*box-shadow: 10px 10px 20px grey;*/
    width:100%;
    height:100%;
    margin-top:30px;
    margin-bottom:30px;
    /*text-align: center;
    align-items: center;*/
  }
  table{
    width:100%;
  }
  th{
    padding-right: 10px;
    padding-left: 10px;
    padding-top:20px;
  }
  td{
    padding-right: 10px;
    padding-left: 10px;
    padding-top:10px;
  }
  thead{
    color:#639;
  }
  .img3{
    margin-left:75px;
    margin-right:5px;
    margin-top:15px;
    margin-bottom:45px;
  }

</style>

</head>

<body>
    <div class="container-fluid">
      
       <div class="row">
        <div class="col-lg-2 pl-0">
          <div class="pic">
            <img class="img-fluid pb-5 pr-5" src="https://open-frontend-bucket.s3.amazonaws.com/open-money/logo/logo.svg">
          </div>
          <div class="profile  pl-4">
            <img class="img2-fluid" src="https://lh5.googleusercontent.com/-0CJb-vuNWT0/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnNX5YGiZ20LHdIEg6Q1aH06Wlz5A/s96-c/photo.jpg">
            <div class="row px-4 py-2">
              <h7 style="font-weight:600">Gautham Vinod</h7>
            </div>
          </div>

          

          <div class="vertical-menu py-2">
          <a href="{{route('details')}}"class="pt-3"><i class="fa fa-home pl-4 pr-3" aria-hidden="true" style="font-size:21px;"></i> Dashboard</a>
          <a href="{{route('acc_details')}}" class="active pt-3"><i class="fa fa-users pl-4 pr-3" aria-hidden="true"></i>Profile</a>
          </div>

        </div>
        <div class="col-lg-10 pr-4">
          <div class="row">
        <div class="topnav">
          <div class="topnav-left">
            <h5 class="pt-4 pl-5">Profile</h5>
          </div>
          <div class="topnav-right">
           <div class="d-flex">
              <div class="dropdown mr-1 pt-2">
                <button type="button" class="btn btn-secondary dropdown" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="-100,10"><img class="img" src="https://open-frontend-bucket.s3.ap-south-1.amazonaws.com/open-money/icons/header/cog.svg"></button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                  <a class="dropdown-item" href="{{route('logout')}}" method="GET" style="color:#596088;"><i class="fa fa-sign-out pr-2" aria-hidden="true"></i>Logout</a>
                </div>
              </div>
          </div> 
        </div>

      </div>
      </div>
          
        <div class="content">
              <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:inherit;">
              Account Details
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3">
                <img class="img3" src="https://lh5.googleusercontent.com/-0CJb-vuNWT0/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnNX5YGiZ20LHdIEg6Q1aH06Wlz5A/s96-c/photo.jpg">
              </div>
              <div class="col-lg-8">
                <table id="account">
                  <thead>
                    <th>Name:</th>
                    <th>Email:</th>  
                  </thead>
                  <tbody>
                      <tr>
                        <td>{{$data[0][0]->first_name}} {{$data[0][0]->last_name}}</td>
                        <td>{{$data[0][0]->email}}</td>
                      </tr>
                  </tbody>
                  <thead>
                    <th>Mobile Number:</th>
                    <th>Created at:</th>  
                  </thead>
                  <tbody>
                      <tr>
                        <td>{{$data[0][0]->phone_number}}</td>
                        <td>{{$data[0][0]->created_at}}</td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color:inherit;">
              Subscription Details
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
           <div class="row pb-3">
            <table id="subscription" style="text-align:center;">
                  <thead>
                    <th>Sub ID:</th>
                    <th>Subscription:</th>
                    <th>Start date:</th>
                    <th>End date:</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$data[1][0]->sub_id}}</td>
                      <td>{{$data[1][0]->plan}}</td>
                      <td>{{$data[1][0]->start_date}}</td>
                      <td>{{$data[1][0]->end_date}}</td>
                    </tr>
                  </tbody>
                </table>
           </div>
          </div>
        </div>
      </div>
      <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color:inherit;">
          Progress Report
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <table id="marks" style="text-align:center;">
          <thead>
              <th>Marks ID:</th>
              <th>Mathematics:</th>
              <th>Physics:</th>
              <th>Computers:</th>
              <th>Biology:</th>
              <th>Total:</th>
              <th>Percentage:</th>
          </thead>
          <tbody>
            <tr>
              <td>{{$data[2][0]->mark_id}}</td>
              <td>{{$data[2][0]->maths}}</td>
              <td>{{$data[2][0]->physics}}</td>
              <td>{{$data[2][0]->computers}}</td>
              <td>{{$data[2][0]->biology}}</td>
              <td>{{$data[2][0]->total}}</td>
              <td>{{$data[2][0]->percentage}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    </div>
        </div>
        
           </div>
        </div>
      
    </div>
 

</body>  

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

</html>