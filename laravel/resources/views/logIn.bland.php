<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<link rel="stylesheet" href="fonts/css/all.min.css">
        <link rel="stylesheet" href="css/ajax-loader.gif">
        <link href="index.html" rel="stylesheet">
        <link href="register.html" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
    </head>
    <body>
    
          <!-- navbar -->
        <div>
            <nav class="navbar navbar-expand-sm  navbar-dark fixed-top mb-5 ">
                <div class="navbar-brand w-25">
                    <img class="img-fluid w-25" src="images/240_F_104687503_P30SeVRxRXYxyItYj9Vm5kOztwosjb0z.jpg" style="border-radius: 70%;">
                    <h1 style="display: inline; margin-left: 15px;font-size: 50px;width: 100px">CARE</h1>
                </div>
                <div>
                    <form class="form-inline">
                        <input type="search" class="form-control" >
                        <button class="btn btn-light"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <a href ="#collapsing" class="navbar-toggler" data-toggle="collapse" > <span class="navbar-toggler-icon"></span> </a>
                <div class="collapse navbar-collapse" id="collapsing">
                    <div class="navbar-nav ">
                        <a href="index.html" class="nav-item nav-link active" ><i class="fas fa-home"></i></a>
                        <div class="dropdown">
                            <a href="#" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" >products</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item  dropdown-toggle" data-toggle="dropdown">women </a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" >Skin Face</a>
                                        <a href="#" class="dropdown-item" >Skin Body</a>
                                        <a href="#" class="dropdown-item" >Hair</a>
                                    </div>

                                <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown">men</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" >Skin Face</a>
                                        <a href="#" class="dropdown-item" >Skin Body</a>
                                        <a href="#" class="dropdown-item" >Hair</a>
                                    </div>

                                <a href="#" class="dropdown-item  dropdown-toggle" data-toggle="dropdown">kids</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" >Skin Face</a>
                                        <a href="#" class="dropdown-item" >Skin Body</a>
                                        <a href="#" class="dropdown-item" >Hair</a>
                                    </div>
                                    
                            </div>
                        </div>
                    <a href="how%20to%20care.html" class="nav-item nav-link" >How to Care</a>
                    <a href="#contact" class="nav-item nav-link" >Contact</a>
                        <a href="register.html" class="nav-item nav-link" >Register</a>
                        <a href="logIn.html" class="nav-item nav-link" >Log In</a>
                        <a href="#" class="nav-item nav-link active"><i class="fab fa-gratipay"></i></a>
                        <a href="#" class="nav-item nav-link active"><i class="fas fa-cart-arrow-down"></i></a>
                    </div>
                </div>
            </nav>
        </div>
<!--        log in form-->
        <div class="container login row row-cols-xl-2 row-cols-lg-2 row-cols-md-1 row-cols-sm-1 row-cols-1" style=" margin-top: 100px;">
            <div class="describtion text-center" style="background-image: url('images/login%20.jpg');">
                <h1>Welcom User</h1>
                <em>you here to found your comfortable skine, body and hair to you and your family log in here to used be easer </em>
            </div>
            <div class="form">
                <h1 class="text-center log">Login</h1>
                <form>
                    <i class="fas fa-user"></i>
                    <label for="email" style="font-family: 'Play', sans-serif;" >Your email</label><br>
                    <input name="Email" id="email" type="email" placeholder=" abc@gmail.com" required  attern="^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="on" style="width: 80%;">
                    <i class="fas fa-key"></i>
                    <label style="font-family: 'Play', sans-serif;">Your Password</label>
				    <input type="password" name="password" placeholder="at least 8 characters" pattern="^.{8,}$" title="your password must be 8 caharacters at least" autocomplete="on" style="width: 80%;">
                    <div  class="row row-cols-xl-2 row-cols-lg-1">
                        <div class="cols">
                            <input type="checkbox" name="agree">
                            <em>Remember Me</em><br>
                            <input class="text-right m-1" type="submit" value="Login" title="Can't Login" data-content="you should match all validation first">
                        </div>
                        <div class="cols">
                            <em>Don't have an account!</em>
                            <a href="register.html" style="display: inline;"><input class="text-right mt-1 bg-white" type="submit" value="Sing Up"style="color: #30475e; "></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!--        contact with us-->
         <footer>
            <div id="contact" class=" container-fluid">
            <div class="row row-cols-xl-2 row-cols-lg-1">
                <div class="info  m-10">
                    <i class="fas fa-phone-square-alt" style=" color: #e6e6ff;"></i><em>01123456789 / (+02)4659876</em><br>
                    <i class="fas fa-envelope-square" style=" color: #e6e6ff;"></i><em>abcdef@gmail.com</em>
                    <div class="location">
                        <i class="fas fa-map-marked-alt" style=" color: #e6e6ff;"></i><em><a href="https://www.google.com/maps/place/%D8%A7%D9%84%D9%82%D8%A7%D9%87%D8%B1%D8%A9%D8%8C+%D9%85%D8%AD%D8%A7%D9%81%D8%B8%D8%A9+%D8%A7%D9%84%D9%82%D8%A7%D9%87%D8%B1%D8%A9%E2%80%AC%E2%80%AD/@30.0594884,31.2584643,12z/data=!4m2!3m1!1s0x14583fa60b21beeb:0x79dfb296e8423bba">Cairo,Egypt</a></em>
                    </div>
                </div>
                <div id="send" class=" m-10">
                    <form class="send text-left">
                        <label for="name">Enter your full name</label><br>
                        <input id="name" type="text" placeholder="Ahmed Mohamed Mahmoud" autocomplete="on">
                        <label for="email">Your email</label><br>
                        <input name="Email" id="email" type="email" placeholder="abc@gmail.com"required  attern="^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="on">
                        <label for="comment">Your comment</label><br>
                        <input id="comment" type="text"><br>
                        <input type="submit" value="submit" class="text-right">

                    </form>
                </div>
            </div>
              <div class="follow_us">
                        <a href="https://www.facebook.com/profile.php?id=100009430178752" style="width: 100px; height: 100px;"><i class="fab fa-facebook-square" style=" color: #f3eac2;"></i></a>
                        <a href="https://www.linkedin.com/in/yasmeen-mahmoud-653713192" style="width: 100px; height: 100px;"><i class="fab fa-linkedin" style=" color: #f3eac2;"></i></a>
                        <a href="#" style="width: 100px; height: 100px;"><i class="fab fa-twitter-square" style=" color: #f3eac2;"></i></a>
            </div>
        </div>
        </footer>
    </body>
    <script src="js/jquery-3.5.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/slick.min.js" ></script>
    <script src="js/bootstrap.js" ></script>
    <script src="js/javasript.js"></script>
</html>