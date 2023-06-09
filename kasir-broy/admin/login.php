<?php include("../functions.php");
    if((isset($_SESSION['uid']) && isset($_SESSION['username']) && isset($_SESSION['user_level'])) )  
    { 
        if($_SESSION['user_level'] == "admin") 
        {    
            header("Location: index.php"); 
        } 
    } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body style="background-color:black">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3 p-md-5">
            <div class="container">
                <div class="card card-login mx-auto mt-5 text-center">
                    <div class="card-header bg-dark text-white">
                        Admin Login
                    </div>

                    <div class="card-body">
                        <form id="loginform">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                            </svg>
                            
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="inputUsername">User</label>
                                    <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                <div class="form-label-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required" >
                                </div>
                            </div>
                            <br/>
                            <div class="form-group"></div>
                            <div id="warningbox"></div>
                            <input type="submit" class="btn btn-dark col-12 btn-lg btn-block" form="loginform" name="btnlogin" value="Login" />
                        </form>
                        <a href="../index.php" class="text-dark">Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">$('#loginform').submit(function(){$.ajax({type:"POST",url:'process.php',data:{username:$("#inputUsername").val(),password:$("#inputPassword").val()},success:function(data) {if(data==='correct'){window.location.replace('index.php');} else{$("#warningbox").html("<div class='alert alert-danger' role='alert'>"+data+"!</div>");}}});return false;});
    </script>
</body>

<style>
    body {
        overflow: hidden;
    }
</style>

</html>