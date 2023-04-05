<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}


   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $number = $_REQUEST['number'];
   $date = $_REQUEST['date'];
   $branch = $_REQUEST['branch'];
   $doctor = $_REQUEST['doctor'];

   $sql=" INSERT INTO contact_form VALUES('$name','$email',$number,'$date','$branch','$doctor') ";

   if(mysqli_query($conn, $sql)){

   } else{
       echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);

   }

   mysqli_close($conn);


?>
<html>
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>complete responsive hospital website create by win coder</title>
        
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        
            <link rel="stylesheet" href="style.css">
            <style>
            .home
            {
                text-align: center;
 
            }
            .image{
                flex:1 1 40rem;
            }
            .image img
            {
                width:30%;
                padding:1rem;
                animation:float 3s linear infinite;
            }
            @keyframes float
            {
                0%, 100%
                {
                    transform: translateY(0rem);
                }
                50%
                {
                    transform: translateY(3rem);
                }
            }
            h1{
                text-align: center;
                font-family: Garamond,serif;
                
            }
            body
            {
                background-image: url('images/home-bg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: cover;
            }
            input[type=submit]
            {
                background-color: #be994e;
                border: none;
                color: #fff;
                padding: 15px 30px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 12px;
            }
            input[type=button]
            {
                background-color:rgb(194, 160, 212);
                border: none;
                color:white;
                padding: 15px 30px;
                text-decoration:wavy;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 12px;
            }
            .button1
            {
                border-radius: 12px;
            }

        </style>
        </head>
    <body>
        <section class="home">
        <div class="share">
        <a href="#" ><input type="button" value="Appointment confirmed!"></a><br><br><br>
        <a href="index.php" target="_self"><input type="submit" value="CLICK HERE TO GO BACK"></a>
        <p>For further enquiry, contact 8248724892</p>
        </div>

           
        
        
    </section>
    </body>
</html>
