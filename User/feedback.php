
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
        *{
            padding: 0;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
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
        .heading{
            text-align: center;
            padding-top: 5%;
        }
        .heading h1{
            font-size: 2vw;
            font-weight: 400;
           
        }
        .heading p{
            color: #8f7a6a;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 5%;
           
        }
        form :hover{
            border: 2px solid #8f7a6a;
        }
        ::placeholder{
            color: #8f7a6a;
            padding: 2%;

        }
        button{
            height: 5vh;
            width: 10vw;
            background-color: #8f7a6a;
            color: white;
            border: none;
            margin-left: 45%;
            margin-top: 5%;
            cursor: pointer;
        }
        button:hover{
            transform: scale(1.1);
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


        

    </style>
</head>
<body>
<?php include('header.php');?>

    <section class="heading">
        <h1>Feedback</h1>
        <p>We'd Love to hear from you, share your experience!</p>
    </section>

    <form>
        <textarea name="textarea" id="textarea" cols="100" rows="20" placeholder="Share your experience"></textarea>
    </form>

    <button type="submit">Submit</button>

    
    <?php include('footer.php');?>
    
</body>
</html>