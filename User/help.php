<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            overflow-x: hidden;
            height: 0;
        }

        .navbar {
            height: 10vh;
            width: 100vw;
            position: sticky;
            background-color: #8f7a6a;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .art {
            color: white;
            font-size: 2.5vw;
            margin-left: 5%;
            width: 60%;

        }

        .navbar a {
            font-size: 1.1vw;
            margin-right: 3%;
            color: white;
            text-decoration: none;
        }

        .navbar a:hover {
            text-decoration: underline;
            color: white;
        }

        .search-cont i {
            font-size: 1.5vw;
            padding-left: 1%;
            color: white;
            cursor: pointer;
        }

        #cross {
            padding-left: 40%;

            font-size: 2vw;
        }

        input {
            height: 5vh;
            width: 40vw;
            border-radius: 5px;
            background: none;
            border: 2px solid white;
            padding-left: 2%;
            color: white;
            font-size: 1.2vw;
            margin-left: 30%;

        }

        ::placeholder {
            color: white;

        }


        .search-cont {
            height: 40vh;
            width: 100vw;
            background-color: #b8a495;
        }

        .search-cont h3 {
            text-align: center;
            font-weight: 400;
            font-size: 2vw;
            padding-top: 5%;
            color: white;
        }

        .hero {
            display: flex;
            justify-content: space-evenly;
            margin-top: 3%;
        }

        .box1 {
            height: 23vh;
            width: 20vw;
            background-color: rgb(230, 218, 218);
            box-shadow: 2px 2px 5px lightgray inset;
        }
        
        .box1 p{
            margin-left: 4%;
            margin-top: 5%;
        }
        .box1 a{
            text-decoration: none;
            color: black;
            margin-left: 4%;
            margin-top: 7%;
        }
        .box1 a:hover{
            text-decoration: underline;
        }
        .box2 a:hover{
            text-decoration: underline;
        }
        .box3 a:hover{
            text-decoration: underline;
        }
        .box4 a:hover{
            text-decoration: underline;
        }
        .box1 i{
            color: rgb(65, 63, 63);
            margin-left: 4%;
            margin-top: 4%;
            font-size: 1.5vw;
        }

        .box2 {
            height: 23vh;
            width: 20vw;
            background-color: rgb(230, 218, 218);
            box-shadow: 2px 2px 5px lightgray inset;
        }
        .box2 p{
            margin-left: 4%;
            margin-top: 5%;
        }
        
        .box2 a{
            text-decoration: none;
            color: black;
            margin-left: 4%;
            margin-top: 7%;
        }
        .box2 i{
            color: rgb(65, 63, 63);
            margin-left: 4%;
            margin-top: 4%;
            font-size: 1.5vw;
        }

        .box3 {
            height: 23vh;
            width: 20vw;
            background-color: rgb(230, 218, 218);
            box-shadow: 2px 2px 5px lightgray inset;
        }
        .box3 p{
            margin-left: 4%;
            margin-top: 5%;
        }
        .box3 a{
            text-decoration: none;
            color: black;
            margin-left: 4%;
            margin-top: 7%;
        }
        .box3 i{
            color: rgb(65, 63, 63);
            margin-left: 4%;
            margin-top: 4%;
            font-size: 1.5vw;
        }

        .box4 {
            height: 23vh;
            width: 20vw;
            background-color: rgb(230, 218, 218);
           
            box-shadow: 2px 2px 5px lightgray inset;
        }
        .box4 a{
            text-decoration: none;
            color: black;
            margin-left: 4%;
            margin-top: 7%;
        }
        .box4 i{
            color: rgb(65, 63, 63);
            margin-left: 4%;
            margin-top: 4%;
            font-size: 1.5vw;
        }
        .box4 p{
            margin-left: 4%;
            margin-top: 5%;
        }
        
        footer {
            height: 400px;
            margin-top: 10%;
            background-color: #4d3831;
           display: flex;
           justify-content: space-evenly;
          

        }
        footer li{
            list-style: none;
            
        }
        footer ul{
            padding-top: 10%;
            
        }
        footer a{
            color: white;
            text-decoration: none;
            margin-top: 10%;
        }
        footer a:hover{
            text-decoration: underline;

        } 
        .ans h2{
            color: #4d3831;
            font-weight: 500;
            text-align: center;
            margin-top: 5%;
        }
        .ans p{
            text-align: center;
            font-weight: 400;
            
            margin-top: 2%;
        }
        .ans h3{
            text-align: center;
            font-weight: 500;
            font-size: 2vw;
            margin-top: 1%;
            color: #4d3831;
        }
        @media screen and (max-width: 768px) {
            .art {
                font-size: 5vw;
            }

            .navbar {
                height: 15vh;
            }

            .navbar a {
                font-size: 4vw;
                margin-right: 2%;
            }

            .search-cont h3 {
                font-size: 4vw;
            }

            .hero .box1,
            .hero .box2,
            .hero .box3,
            .hero .box4 {
                width: 90%;
            }
        }

        @media screen and (max-width: 480px) {
            .art {
                font-size: 6vw;
            }

            .navbar {
                height: 20vh;
            }

            .navbar a {
                font-size: 5vw;
                margin-right: 2%;
            }

            .search-cont h3 {
                font-size: 5vw;
            }

            input {
                width: 90%;
                margin: 2% auto;
            }

            .hero .box1,
            .hero .box2,
            .hero .box3,
            .hero .box4 {
                width: 100%;
                margin: 2% 0;
            }
        }
    </style>
</head>

<body>
<?php include('header.php');?>


    <div class="search-cont">
        <h3>How can we help you?</h3> <br> <br>
        <input type="text" name="text" id="text" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass "></i>

    </div>
    <section class="hero">
        <div class="box1">
            <i class="fa-solid fa-user"></i>
            User Account <br>
            <p>Get Started by creating <br>your Account</p> <br>
            <a href="create_acc.html">Register</a>
        </div>
        <div class="box2">
            <i class="fa-solid fa-bag-shopping"></i>
            Return & Exchange <br>
            <p>Read our Return <br>and Exchange Policy</p> <br>
            <a href="return_and_ex.html">Read now</a>
        </div>
        <div class="box3">
            <i class="fa-solid fa-user-lock"></i>
            Security <br>
            <p>Read our Privacy <br>and Policy for security reasons</p> <br>
            <a href="policy.html">Read now</a>
        </div>
        <div class="box4">
            <i class="fa-solid fa-circle-question"></i>
            FAQ's <br>
            <p>Please take a moment and explore <br> our FAQ's section</p> <br>
            <a href="faq.html">Read now</a>
        </div>

    </section>

    <section class="ans">
        <h2>Did'nt find an answer?</h2>
        <p>Feel free to Email Us on</p>
        <h3>ArtZone03@gmail.com</h3>
    </section>

   
    <?php include('footer.php');?>

</body>

</html>









