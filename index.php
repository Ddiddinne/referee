<!DOCTYPE html>

<?php
include_once('Database.php'); //connection to Database.

$req=Database::getSport();
$line = $req->fetch();
$sport = isset($_POST['sport'])?$_POST['sport']:$line['sport_name'];
$_POST['sport']=$sport;

$page = isset($_GET['page'])?$_GET['page']:"main";
$Team1 = (isset($_GET['Team1']))? $_GET['Team1']:"Team1";
$Team2 = (isset($_GET['Team2']))? $_GET['Team2']:"Team2";
$points1 = isset($_GET['points1'])?$_GET['points1']:0;
$points2 = isset($_GET['points2'])?$_GET['points2']:0;       //initialisation des variables
?>

<html lang="en">

<head link rel="shortcut icon" type="image/png" href="/img/icone.png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BeYourOwnReferee</title>
	
	<!-- Notre Style CSS -->
	<link href="css/style.css" rel="stylesheet">
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  >Arbitrage</a>
            </li>
            <li>
                <a onclick = $("#menu-close").click(); href="index.php?page=main">Menu</a>
            </li>
            <li>
                <a onclick = $("#menu-close").click(); href="index.php?page=option">Options</a>
            </li>
            <li>
                <a onclick = $("#menu-close").click(); href="index.php?page=Leaderboard">Leaderboard</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About us</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center" ><?php include($page.".php") ?>
		
			
            
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About us:</h2>
                    <p class="lead">We are 3 students of <b> ISEN </b>. We had to do a project about Web Technology.<br /> 
					We are proud to introduce you our first Website : <b> BeYourOwnReferee ! </b> <br />
					Here you can play with your friends for fun but still calculate your score without any difficulties ! </p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4> <strong> BeYourOwnReferee </strong> </h4>
                    <p>41 boulevard Vauban<br>59046, Cedex</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> +33 (0)3 20 30 40 50</li>                      
                    </ul>
                    <br>
                    
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"> </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"> </script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
