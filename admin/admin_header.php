<?php
include("../conn.php");
?>




<!doctype html>
            <html lang="en">
            <head>
                <title>Admin Panel - Online Movie Ticket</title>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                
                <link rel="icon" href="../img/logo.png">
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                <!-- font-awesome -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<style>
    * {box-sizing: border-box}

    .container{
        padding: 16px;
    }

    textarea, input[type=text], input[type=password], input[type=tel], input[type=number], input[type=date]{

width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
    }
textarea, input[type=text]:focus,nput[type=password]:focus {
background-color: #ddd;
outline: none; 
}
hr
{
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}
.registerbtn {
background-color: maroon;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 50%;
opacity: 0.9;
}

.registerbtn:hover {
opacity:1;
}
a{
color: dodgerblue;
}

.signin{
background-color: #f1f1f1;  
text-align: center;
}
div.seatCharts-seat.available{
background-color: #949494;
padding:2%;
}
</style>
            </head>
            <body>
            
            
            <nav class="navbar navbar-expand-md navbar-dark" style="background-color:maroon">
                <a class="navbar-brand" href="index.php"><img src="..//img/movie-1.png" style="width:60px;"/></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <h5><a class="nav-link" href="dashboard.php">Admin Panel Online Movie Ticket Booking</a></h5>
                        </li>
                        
                    </ul>
            
                    <ul  class="navbar-nav ">
                            <li class="nav-item">
                            <a class="nav-link" href="../Admin/index.php" >Logout</a>
                            </li>
                    </ul>
                        
                </div>
            </nav>