<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>


    

    <!-- Bootstrap core CSS -->
<link href="../assets/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="Post" action="add_admin.inc.php">
    <img class="mb-4" src="../assets/loteka.jpg" alt="" width="100" height="100">
    <h3>Welcome to Loteka !!!</h3>
    <h4 class=" mb-3 fw-normal">Adding an Admin to the Systems</h4>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="login" placeholder="sucursale028898" >
      <label for="floatingInput">Login_ID</label>
    </div>
    <div class="form-floating">
      <input type="password"  name="psw" class="form-control" id="floatingPassword" placeholder="Password" >
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" name="pin" placeholder="Pin" >
      <label for="floatingPassword">Pin</label>
    </div>

   <br>
    <button class="w-100 btn btn-lg btn-primary" name="submit" >Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy;esei_services 2022</p>
  </form>
</main>


    
  </body>
</html>
