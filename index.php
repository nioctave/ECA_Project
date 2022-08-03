<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECA</title>
    <link rel="icon" type="image/x-icon" href="./images/Bg_logo.png">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slides.css">
    <link rel="stylesheet" href="css/card.css">
</head>
<body>

                <div class = "header">
                    <div>
                        <img class="logo" src="images/logo+name.png" width = "50px" height = "30"alt="logo">
                    </div>
                    
                    <div class="menu">
                        <a href="./signup.php"><button>Sign Up</button></a>
                        <a href="./login.php"><button>Log In</button></a>               
                    </div>
                </div>
                <div class="msg_container">
                    <div class="welcome_msg">
                        <h1>FIND A HOME AWAY FROM HOME</h1>
                        <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae incidunt libero laudantium quae sunt maiores corporis, nam vel doloremque, unde consequatur aliquid, vero beatae ad ullam! Exercitationem modi nam eveniet?</P>
                        <a href="./login.php"><button>Get Started</button></a>
                    </div>
                    <div class="welcome_img">
                        <img src="images/Bg_logo.png" alt="">
                    </div>
                    
                </div>
                <div class="tabs">
                    <a  onclick = changefac(1)>Hotels & Lodges</a>
                    <a  onclick = changefac(2)>Tiny Homes</a> 
                    <a  onclick = changefac(3)>Restaurants & Cafe</a>      
                    <a  onclick = changefac(4)>Vacation Places</a>                  
                </div>

                <div class = "fac1 hotel" id = "fac1">
                    <iframe id="myHtml" src="./hotelTab.html"></iframe>
                </div>

                <div  style= "display:none" class = "fac2 tiny" id = "fac2">

                </div>


                <div style= "display:none" class = "fac3 restaurant" id = "fac3">

                </div>

                <div style= "display:none" class = "fac4 vacation" id = "fac4">

                </div>

                <script>

                    function changefac(a)
                    {
                        switch(a){
                            case 1:
                                elemx = document.getElementById('myHtml');
                                elemx.src = './hotelTab.html';
                                break;
                            case 2:
                                elemx = document.getElementById('myHtml');
                                elemx.src = './tinyTab.html';
                                break;
                            case 3:
                                elemx = document.getElementById('myHtml');
                                elemx.src = './restaurantTab.html';
                                break;
                            case 4:
                                elemx = document.getElementById('myHtml');
                                elemx.src = './vacationTab.html';
                                break;
                        }

                    }
                </script>


                <script>
                            let slideIndex = [1,1,1,1,1,1];
                            let slideId = ["mySlides1", "mySlides2","mySlides3","mySlides4","mySlides5","mySlides6"]
                            showSlides(1, 0);
                            showSlides(1, 1);
                            showSlides(1, 2);
                            showSlides(1, 3);
                            showSlides(1, 4);
                            showSlides(1, 5);

                            function plusSlides(n, no) {
                            showSlides(slideIndex[no] += n, no);
                            }

                            function showSlides(n, no) {
                            let i;
                            let x = document.getElementsByClassName(slideId[no]);
                            if (n > x.length) {slideIndex[no] = 1}    
                            if (n < 1) {slideIndex[no] = x.length}
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";  
                            }
                            x[slideIndex[no]-1].style.display = "block";  
                            }

                    </script>











                
                

    


                <div class="footer">
                    <div class="links">
                        <a href="#">About us</a>
                        <a href="#">Help</a> 
                        <a href="#">Settings</a>
                    </div>
                    <div class="copyright">
                        <a href="#">Copyright</a>
                    </div>

                </div>

</body>
</html>

