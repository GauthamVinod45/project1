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
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <style>
  .content{
    background: white;
    border-radius:20px;
    /*box-shadow: 10px 10px 20px grey;*/
    height:100%;
    width:100%;
    margin-top:30px;
  }
  
  .col-lg-4{
    margin:0 auto;
  }
  .btn1{
    border:none;
    outline:none;
    height:50px;
    width:100%;
    background-color:#639;
    color:white;
    border-radius:30px;
    font-weight: bold;
  }
  .btn1:hover{
    background-color: white;
    border:1px solid;
    color: #639;
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
          <a href="{{route('newUser')}}" class="active pt-3"><i class="fa fa-user-plus pl-4 pr-3" aria-hidden="true"></i>New User</a>
          <a href="{{route('newSub')}}" class="pt-3"><i class="fa fa-university pl-4 pr-3" aria-hidden="true"></i>New Subscription</a>
          <a href="{{route('userList')}}" class="pt-3"><i class="fa fa-users pl-4 pr-3" aria-hidden="true"></i>User list</a>
          <a href="{{route('subList')}}" class="pt-3"><i class="fa fa-bar-chart pl-4 pr-3" aria-hidden="true"></i>Subscription list</a>
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
            <h5 class="pt-4 pl-4">New User</h5>
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
        <div class="pt-4 pb-2">
          <h5>Enter user details here :</h5>
        </div>
        <form>
            <div class="form-row px-4">
              <div class="col-lg-6 px-5">
                <label class="mt-4">First Name :</label>
                <input type="text" id="fname" name="fname" placeholder="Enter first name *" class="form-control px-4">
                <span class="text-danger" id="error-fname"></span>
              </div>
              <div class="col-lg-6 px-5">
                <label class="mt-4">Last Name :</label>
                <input type="text" id="lname" name="lname" placeholder="Enter last name *" class="form-control px-4">
                <span class="text-danger" id="error-lname"></span>
              </div>
            </div>
    
            <div class="form-row px-4">
              <div class="col-lg-6 px-5">
                <label class="mt-4">Email Address :</label>
                <input type="text" id="email" name="email" placeholder=" Enter email ID *" class="form-control px-4">
                <span class="text-danger" id="error-email"></span>
              </div>
              <div class="col-lg-6 px-5">
                <label class="mt-4">Phone number :</label>
                <input type="text" id="phnumber" name="phnumber" maxlength="10" onkeypress="allowNumbersOnly(event)" placeholder="Enter Mobile number *" class="form-control px-4">
                <span class="text-danger" id="error-phnumber"></span>
              </div>
            </div>
            <div class="form-row px-4">
              
            </div>
            <div class="form-row px-4">
              <div class="col-lg-6 px-5">
                <label class="mt-4">Password :</label>
                <input type="password" id="pass" name="pass" placeholder=" Enter alphanumeric password *" class="form-control px-4">
                <span class="text-danger" id="error-pass"></span>
            </div>
            </div>
            <div class="form-row px-4 pt-2 pb-2">
              <div class="col-lg-4">
                <button type="button" id="signup" onclick="Signup()" class="btn1 mt-4 mb-4">ADD USER</button>
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
function Signup()
{
  var firstname=document.getElementById("fname").value;
  var lastname=document.getElementById("lname").value;
  var email=document.getElementById("email").value;
  var number=document.getElementById("phnumber").value;
  var password=document.getElementById("pass").value;

  var l=number.toString().length;
  var pl=password.toString().length;
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' '+time;
  var Exp = /((^[0-9]+[a-z]+)|(^[a-z]+[0-9]+))+[0-9a-z]+$/i;
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  console.log(dateTime);

  document.getElementById("error-fname").innerHTML="";
  document.getElementById("error-lname").innerHTML="";
  document.getElementById("error-email").innerHTML="";
  document.getElementById("error-phnumber").innerHTML="";
  document.getElementById("error-pass").innerHTML=""; 

  if(firstname=="")
        document.getElementById("error-fname").innerHTML="The firstname field is required";

    if(lastname=="")
        document.getElementById("error-lname").innerHTML="The lastname field is required";

    if(email=="")
        document.getElementById("error-email").innerHTML="The email field is required";
    else if(!email.match(mailformat))
        document.getElementById("error-email").innerHTML="Enter valid Email ID";

    if(number=="")
        document.getElementById("error-phnumber").innerHTML="The mobile number field is required";
    else if(l<10)
        document.getElementById("error-phnumber").innerHTML="Enter Valid Mobile number";

    if(password=="")
        document.getElementById("error-pass").innerHTML="The password field is required";              
    else if(pl<8)
        document.getElementById("error-pass").innerHTML="Password should have minimum 8 characters";
    else if(!password.match(Exp))
        document.getElementById("error-pass").innerHTML="Password should be alphanumeric";
  else
  {
      $.ajax({
              type:'POST',
              url:"{{route('adduser')}}",
              data:{"_token": "{{ csrf_token() }}",'first_name':firstname,'last_name':lastname,'email':email,'phone_number':number,'password':password},
              success:function(data){
              var result=JSON.parse(data)

                if(result.status==200)
              {
                Swal.fire(
                 'Account added',
                 '',
                 'success'
                 )
              }else if(result.status==400)
                {
                  Swal.fire(
                   'Something went wrong',
                   result.message,
                   'error'
                   )
                }
              else
              {
                Swal.fire(
                 'Failed',
                 '',
                 'error'
                 )
              }

              }

            });

  }
  
}
function allowNumbersOnly(e) {
  var code = (e.which) ? e.which : e.keyCode;
  if (code > 31 && (code < 48 || code > 57)) {
    e.preventDefault();
  }
}
</script>

</html>