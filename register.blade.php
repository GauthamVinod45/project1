<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up | Open</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="login.css">
  <style>
  
  </style>
</head>

<body>

  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <img class="img-fluid" src="https://open-frontend-bucket.s3.amazonaws.com/open-money/logo/logo.svg">
        </div>
        <div class="col-lg-7">
          <h1 class="mb-2" style="font-size: 28px;">Let's get started</h1>
           
           <form>
            <div class="form-row mt-4">
              <div class="col">
                <input type="text" id="fname" name="fname" class="form-control mt-4" onkeyup="fnameValidate()" required>
                <span class="floating-label" id="label-fname">First name</span>
                <span class="error pull-right" id="error-fname"></span>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <input type="text" id="lname" name="lname" class="form-control mt-4" onkeyup="lnameValidate()" required>
                <span class="floating-label" id="label-lname">Last name</span>
                <span class="error pull-right" id="error-lname"></span>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <input type="text" id="email" name="email" class="form-control mt-4" onkeyup="emailValidate()" required>
                <span class="floating-label" id="label-email">Email ID</span>
                <span class="error pull-right" id="error-email"></span>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <input type="text" id="phnumber" name="phnumber" maxlength="10" onkeyup="phnumValidate()" onkeypress="allowNumbersOnly(event)" class="form-control mt-4" required>
                <span class="floating-label" id="label-phnumber">Mobile number</span>
                <span class="error pull-right" id="error-phnumber"></span>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <input type="password" id="pass" name="pass" class="form-control mt-4" onkeyup="passValidate()" required>
                <span class="floating-label" id="label-pass">Password</span>
                <span class="error pull-right" id="error-pass"></span>
            </div>
            </div>
            <div class="form-row">
              <div class="col">
                <button type="button" id="signup" onclick="Signup()" class="btn1 mt-5 mb-4">SIGN UP</button>
              </div>
            </div>
            <p class="mb-5 text-center">Already on Open ? <a href="{{route('login')}}">Login here</a></p>
          </form>
            
           </div>
        </div>
      
    </div>
  </section>

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
  // var today = new Date();
  // var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  // var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  // var dateTime = date+' '+time;
  var Exp = /((^[0-9]+[a-z]+)|(^[a-z]+[0-9]+))+[0-9a-z]+$/i;
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  //console.log(dateTime);

  document.getElementById("error-fname").innerHTML="";
  document.getElementById("error-lname").innerHTML="";
  document.getElementById("error-email").innerHTML="";
  document.getElementById("error-phnumber").innerHTML="";
  document.getElementById("error-pass").innerHTML=""; 

	
	
    // if(firstname=="")
    //     document.getElementById("error-fname").innerHTML="The firstname field is required";document.getElementById("fname").style.color = "red";

    // if(lastname=="")
    //     document.getElementById("error-lname").innerHTML="The lastname field is required";

    // if(email=="")
    //     document.getElementById("error-email").innerHTML="The email field is required";
    // else 
      if(!email.match(mailformat)){
        document.getElementById("error-email").innerHTML="Enter valid Email ID";
        document.getElementById("label-email").style.color = "red";
      }

    // if(number=="")
    //     document.getElementById("error-phnumber").innerHTML="The mobile number field is required";
    // else
      if(l<10){
        document.getElementById("error-phnumber").innerHTML="Enter valid Mobile number";
        document.getElementById("label-phnumber").style.color = "red";
     }

    // if(password=="")
    //     document.getElementById("error-pass").innerHTML="The password field is required";              
    // else 
      if(pl<8){
        document.getElementById("error-pass").innerHTML="Password should have minimum 8 characters";
        document.getElementById("label-pass").style.color = "red";  
      }
      if(!password.match(Exp)){
        document.getElementById("error-pass").innerHTML="Password should be alphanumeric";
        document.getElementById("label-pass").style.color = "red";  
      }
      else
      {
        $.ajax({
                type:'POST',
                url:"{{route('save')}}",
                data:{"_token": "{{ csrf_token() }}",'first_name':firstname,'last_name':lastname,'email':email,'phone_number':number,'password':password},
                success:function(data){
                var result=JSON.parse(data)

                  if(result.status==200)
                {
                  Swal.fire(
                   'Account created',
                   '',
                   'success'
                   )
                  .then((result) => {
                    if (result.isConfirmed) {
                      window.location.href="http://127.0.0.1:8000/login";
                    }
                  }) 
                  
                }
                else if(result.status==404)
                {
                  document.getElementById("error-email").innerHTML="Email ID already taken";
                }
                else if(result.status==405)
                {
                  document.getElementById("error-phnumber").innerHTML="Mobile number already taken";
                }
                else
                {
                  Swal.fire(
                   'Signup Failed',
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

function fnameValidate() {
  var firstname=document.getElementById("fname").value;
  if(firstname==""){
    document.getElementById("error-fname").innerHTML="The firstname field is required";
    document.getElementById("label-fname").style.color = "red";
    document.getElementById("fname").style.setProperty('border-color', 'red');
  }
  else{
    document.getElementById("error-fname").innerHTML="";
    document.getElementById("label-fname").style.color = "";
    document.getElementById("fname").style.setProperty('border-color', '');
  }
}

function lnameValidate() {
  var lastname=document.getElementById("lname").value;
  if(lastname==""){
    document.getElementById("error-lname").innerHTML="The lastname field is required";
    document.getElementById("label-lname").style.color = "red";
    document.getElementById("lname").style.setProperty('border-color', 'red');
  }
  else{
    document.getElementById("error-lname").innerHTML="";
    document.getElementById("label-lname").style.color = "";
    document.getElementById("lname").style.setProperty('border-color', '');
  }
}

function emailValidate() {
  var email=document.getElementById("email").value;
  if(email==""){
    document.getElementById("error-email").innerHTML="The email field is required";
    document.getElementById("label-email").style.color = "red";
    document.getElementById("email").style.setProperty('border-color', 'red');
  }
  else{
    document.getElementById("error-email").innerHTML="";
    document.getElementById("label-email").style.color = "";
    document.getElementById("email").style.setProperty('border-color', '');
  }
}

function phnumValidate() {
  var number=document.getElementById("phnumber").value;
  if(number==""){
    document.getElementById("error-phnumber").innerHTML="The mobile number field is required";
    document.getElementById("label-phnumber").style.color = "red";
    document.getElementById("phnumber").style.setProperty('border-color', 'red');
  }
  else{
    document.getElementById("error-phnumber").innerHTML="";
    document.getElementById("label-phnumber").style.color = "";
    document.getElementById("phnumber").style.setProperty('border-color', '');
  }
}

function passValidate() {
  var password=document.getElementById("pass").value;
  if(password==""){
    document.getElementById("error-pass").innerHTML="The password field is required"; 
    document.getElementById("label-pass").style.color = "red";
    document.getElementById("pass").style.setProperty('border-color', 'red');
  }
  else{
    document.getElementById("error-pass").innerHTML="";
    document.getElementById("label-pass").style.color = "";
    document.getElementById("pass").style.setProperty('border-color', '');
  }
}

</script>

<script>
  var $input = $('input'),
    $register = $('#signup');

$register.attr('disabled', true);
$input.keyup(function() {
    var trigger = false;
    $input.each(function() {
        if (!$(this).val()) {
            trigger = true;
        }
    });
    trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
});
</script>

</html>
