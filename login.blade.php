<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login | Open</title>
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
          <h5 class="pb-1" style="font-size: 28px;">Welcome back !</h5>
          <h7 class="pb-1 mb-5">To your all-in-one online bank account</h7>
           
           <form>
            <div class="form-row mt-4">
              <div class="col">
                <input type="text" id="usname" name="usname" class="form-control mt-4" onkeyup="usnameValidate()" required>
                <span class="floating-label" id="label-usname">Email ID/ Mobile Number</span>
                <span class="error pull-right" id="error-usname"></span>
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
                <button type="button" id="login" class="btn1 mt-5 mb-4" onclick="Login()">LOG IN</button>
              </div>
            </div>
            <p class="mb-5 text-center">New to Open ? <a href="{{route('register')}}">Get your account</a></p>
          </form>
            
           </div>
        </div>
      
    </div>
  </section>

</body>  

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

<script>
function Login()
{
  var username=document.getElementById("usname").value;
  var password=document.getElementById("pass").value;

  // document.getElementById("error-usname").innerHTML="";
  // document.getElementById("error-pass").innerHTML="";
  console.log("hi");
  // const button = document.getElementById('login')
  // button.disabled = true;

    // if(username==""||password=="")
    // { 
    //   // Swal.fire(
    //   //              'Login Failed',
    //   //              'Fields cant be empty',
    //   //              'error'
    //   //              )
    //   if(username=="")
    //     document.getElementById("error-usname").innerHTML="The username field is required";
    //   if(password=="")
    //     document.getElementById("error-pass").innerHTML="The password field is required";
    // }
    // else
    // {
      $.ajax({
                type:'POST',
                url:"{{route('check')}}",
                data:{"_token": "{{ csrf_token() }}",'email':username,'password':password},
                success:function(data){
                var result=JSON.parse(data)
                //console.log(data.toString());
                //var result=data.toString();
                //console.log(result.status);

                if(result.status==200)
                {
                  const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })

                  Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                  })

                  //console.log("hi");
                  // $.ajax({
                  //    type:'POST',
                  //    url:"{{route('details')}}",
                  //    data:{'usname':username}
                  //    });
                  //console.log(result);
                   window.location.href="http://127.0.0.1:8000/details";
                   //?id="+result.results
                }else if(result.status==201)
                {
                  const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })

                  Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                  })
                  
                  window.location.href="http://127.0.0.1:8000/home";
                }
                // else if(result.status==201)
                // {
                //   document.getElementById("error-pass").innerHTML="Incorrect password";
                // }
                else 
                {
                  Swal.fire(
                   'Login Failed',
                   'Username and Password does not match',
                   'error'
                   )
                  
                }

                }
                
         });
    //}

   
}

function usnameValidate() {
  var username=document.getElementById("usname").value;
  if(username==""){
    document.getElementById("error-usname").innerHTML="Please enter a Email ID/ Mobile Number";
    document.getElementById("label-usname").style.color = "red";
    document.getElementById("usname").style.setProperty('border-color', 'red');
  }
  else{
    document.getElementById("error-usname").innerHTML="";
    document.getElementById("label-usname").style.color = "";
    document.getElementById("usname").style.setProperty('border-color', '');
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
    $register = $('#login');

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