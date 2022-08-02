<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <title>signup</title>
    <link rel="icon" href="./hotel-solid.svg">
</head>
<body>
    <div class="container">
    
    <h1>
            SIGN UP TODAY FOR A FREE ACCOUNT.
        </h1>
        <h6>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.  
        </h6>

        <div class="feedback-form">

            <form action="./signup.inc.php" method="POST">
                <div class="feedback-name">
                    <!-- <img src="Icons/envelope-solid.svg" alt="email"> -->
                    <input class="input" name="fname" placeholder="First Name" type="text" required><br>
                </div>
                <div class="feedback-name">
                    <!-- <img src="Icons/envelope-solid.svg" alt="email"> -->
                    <input class="input" name="lname" placeholder="Last Name" type="text" required><br>
                </div>
                <div class="feedback-email">
                    <!-- <img src="Icons/envelope-solid.svg" alt="email"> -->
                    <input class="input" name="email" placeholder=" Email" type="email" required>
                </div> 
                <div class="feedback-name">
                    <!-- <img src="Icons/envelope-solid.svg" alt="email"> -->
                    <input class="input" name="password" placeholder="Password" type="password" required><br>
                </div>
                <div class="feedback-name">
                    <!-- <img src="Icons/envelope-solid.svg" alt="email"> -->
                    <input class="input" name="location" placeholder="Location" type="text" required><br>
                </div> 
                <div class="feedback-name">
                    <!-- <img src="Icons/envelope-solid.svg" alt="email"> -->
                    <input class="input" name="tel" placeholder="Tel" type="text" required><br>
                </div>  
                <input placeholder="Sign Up" class="submit" type="submit"> 
            </form>   
                         
        </div>
    </div>    


</body>
</html>