<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>login</title>
    <link rel="icon" href="./hotel-solid.svg">
</head>
<body>
    <div class="container">
    
        <h1>
            LOG IN
        </h1>
        <h6>
            Sign in for access to book.  
        </h6>

        <div class="feedback-form">

            <form action="./login_inc.php" method="POST">
                <div class="feedback-email">
                <!-- <img src="Icons/envelope-solid.svg" alt="email"> -->
                    <input class="input" name="email" placeholder=" Email" type="email" required>
                </div>    
                <div class="feedback-name">
                    <!-- <img src="Icons/envelope-solid.svg" alt="email"> -->
                    <input class="input" name="password" placeholder="password" type="password" required><br>
                </div>
                <input class="submit" type="submit">
            </form>   
            
        </div>
         Don't have an account? <a href = "./signup.php">Sign Up</a>
    </div>    


</body>
</html>