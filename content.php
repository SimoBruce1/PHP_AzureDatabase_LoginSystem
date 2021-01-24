<?php
/* Microsoft Azure Database PHP login protected page by childofcode.com */

// Initialize the session, Check if the user is logged in, if not then redirect him to login page
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta charset="utf-8">
	<meta name=description content="PHP and Microsoft Azure Database Login by childofcode.comn">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Microsoft Azure Database PHP login page secure content page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <style type="text/css">
         body{ 
            color: #666;
            font: 14px sans-serif; 
            background-color: #fafafa;
        }
        .login-block{ 
            padding: 20px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }
        .wrapper{ 
            width:100%;
            height:100%;
            padding: 20px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: white;
            border: 1px solid #eaeaea;
        }
        .logout-button{ 
            color: #f9f9f9;
            background-color: #00bfff;
            border-color: #eaeaea;
        }
    </style>
    <script>
        window.onload = function()
        {
            // logout function
            $(document).off("click", "#logout-button");
            $(document).on("click", "#logout-button", function()
            {
                window.location.href = "logout.php";
            });
        }
    </script>
</head>
<body>
    <div class="login-block">
        <div class="wrapper">
            <h2>secure content page</h2>
            </br>
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to secure content page.</h1>
            <input type="submit" class="btn btn-primary logout-button" value="Logout">
            <a href="https://childofcode.com/">by childofcode.com</a>
        </div>    
    </div>
</body>
</html>