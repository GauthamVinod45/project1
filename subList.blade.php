<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Open</title>
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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

  <link rel="stylesheet" href="style.css">
  <style>
  .content{
    background: white;
    border-radius:20px;
    /*box-shadow: 10px 10px 20px grey;*/
    padding-left:30px;
    padding-right:30px;
    height:90%;
    width:100%;
    margin-top:30px;
    text-align:center;
  }
  table{
    text-align:center;
    width:100%;
    color:rgba(0,0,0,.5);
    font-size:13px;
  }
  th,td{
    padding-top: 10px;
    padding-bottom: 10px;
    border-bottom:1px solid #dcdee5;
    padding-right: 10px;
    padding-left: 10px;
  }
  td{
    height:70px;
    text-align:left;
  }
  thead{
    text-align:left;
    font-weight:none;
  }
  /*.pagination > li > a,
  .pagination a{
    color:#639;
  }
  .page-item.active .page-link {
    z-index: 1;
    background-color:#639;
    border-color:#639;
  }*/
  table.dataTable thead th {
    border-bottom:1px solid #dcdee5;
    font-weight:500;
    padding-right: 10px;
    padding-left: 10px;
  }
  table.dataTable.no-footer {
    border-bottom: 0;
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
          <a href="{{route('home')}}" class="pt-3"><i class="fa fa-home pl-4 pr-3" aria-hidden="true" style="font-size:21px;"></i> Home</a>
          <a href="{{route('newUser')}}" class="pt-3"><i class="fa fa-user-plus pl-4 pr-3" aria-hidden="true"></i>New User</a>
          <a href="{{route('newSub')}}" class="pt-3"><i class="fa fa-university pl-4 pr-3" aria-hidden="true"></i>New Subscription</a>
          <a href="{{route('userList')}}" class="pt-3"><i class="fa fa-users pl-4 pr-3" aria-hidden="true"></i>User list</a>
          <a href="{{route('subList')}}" class="active pt-3"><i class="fa fa-bar-chart pl-4 pr-3" aria-hidden="true"></i>Subscription list</a>
          <a href="{{route('userSubList')}}" class="pt-3"><i class="fa fa-line-chart pl-4 pr-3" aria-hidden="true"></i>Joint list</a>
          <a href="{{route('add_marks')}}" class="pt-3"><i class="fa fa-book pl-4 pr-3" aria-hidden="true" style="font-size:22px;"></i>Add Marks</a>
          <a href="{{route('mark_list')}}" class="pt-3"><i class="fa fa-child pl-4 pr-3" aria-hidden="true" style="font-size:23px;"></i> Marks List</a>
          </div>

        </div>
        <div class="col-lg-10 pr-4">
          <div class="row">
        <div class="topnav">
          <div class="topnav-left">
            <button type="button" class="btn3 pt-4 pl-5" onclick="window.location.href='http://127.0.0.1:8000/home'"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
          </div>
          <div class="topnav-left">
            <h5 class="pt-4 pl-4">Subscription list</h5>
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
          <form>
            <div class="form-row">
              <div class="col-lg">
                <table id="userdata">
                  <thead>
                    <th>Sub ID:</th>
                    <th>User ID:</th>
                    <th>Subscription:</th>
                    <th>Start date:</th>
                    <th>End date:</th>
                  </thead>
                  <tbody>

                    @foreach($data as $key => $value)
                      <tr>
                        <td>{{$value->sub_id}}</td>
                        <td>{{$value->user_id}}</td>
                        <td>{{$value->plan}}</td>
                        <td>{{$value->start_date}}</td>
                        <td>{{$value->end_date}}</td>
                      </tr>
                      @endforeach

                  </tbody>
                </table>
              </div>
            </div>
            </form>
        </div>

           </div>
        </div>
      
    </div>
 

</body>  

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

<script>

$(document).ready( function () {
    $('#userdata').DataTable({
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
        "ordering": false,
        "lengthChange": false,
        "searching": false,
    });
} );

// function getUser()
// {
//     $.ajax({
//               type:'POST',
//               url:"{{route('adminsub')}}",
//               data:{"_token": "{{ csrf_token() }}"},
//               success:function(data)
//               {
//                 var result=JSON.parse(data);
//                 var len=result[0].length;
//                 //console.log(result[0][0]);
//                 var i;
//                 for(i=0;i<len;i++)
//                 {
//                     //if(result[0][i].plan=="solo"||result[0][i].plan=="startup"||result[0][i].plan=="growth")
                    
//                       var sid=result[0][i].sub_id;
//                       var uid=result[0][i].user_id;
//                       var sub=result[0][i].plan;
//                       var start=result[0][i].start_date;
//                       var end=result[0][i].end_date;

//                       $("#userdata").append("<tr><td>"+sid+"</td><td>"+uid+"</td><td>"+sub+"</td><td>"+start+"</td><td>"+end+"</td></tr>");
                    
//                 }
//               }
//           });

// }

</script>