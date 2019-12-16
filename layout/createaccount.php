<html>
    <head>
        <title>E-Commerce Create Account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="/assets/css/fontawesome/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/fontawesome/brands.css">
        <link rel="stylesheet" href="/assets/css/fontawesome/regular.css">
        <link rel="stylesheet" href="/assets/css/fontawesome/solid.css">

        <link rel="stylesheet" href="../assets/css/main.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<body class="text-center login">
<?php { ?>
    <form class="form-signin" action="createaccountbe.php" method="post">
      <img class="mb-4" src="../assets/images/shopping-online.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
      <label for="Username" class="sr-only">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Username" >
      <br>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email Id" >
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" >
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
    </form>
<?php } ?>
    <script>
      $(document).ready(function(){
        $('.form-signin').submit(function(e){
          e.preventDefault();
          var emailId = $('#inputEmail').val();
          var password = $('#inputPassword').val();
          var validForm = true;

          $('.error').remove();

          if (emailId.length < 1 ){
            $('#inputEmail').after('<span class="error">This field is
             required</span>');
            validForm = false;
            if(email == "" || email == null) {
              alert("Please enter email");
                return false;
              }
            }
          }else {
              var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
              var emailId = regEx.test(emailId);
              if (!emailId) {
                $('#inputEmail').after('<span class="error">Enter a valid email</span>');
                validForm = false;
              }
            }
          if (password.length < 10 ) {
            $('#inputPassword').after('<span class="error">This field is required</span>');
            validForm = false;
          }
          if(validForm ) {
            window.location.href = 'fullproducts_detail.php';
          }
        })

      });
    </script>
</body>
</html>