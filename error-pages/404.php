<?php
$config = parse_ini_file('../config/config.ini.php');

$baseUrl = $config['Url'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>404 Not Found - JodelBlue Web-App and Browser-Client</title>
		
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<meta name="description" content="JodelBlue is a WebClient for the Jodel App. No registration required! Browse Jodels all over the world. Send your own Jodels or upvote others.">
		<meta name="keywords" content="jodelblue, jodel, blue, webclient, web, client">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>style.css" type="text/css">
		
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseUrl;?>img/favicon/favicon.ico">
		<link rel="icon" type="image/x-icon" href="<?php echo $baseUrl;?>img/favicon/favicon.ico">
		<link rel="icon" type="image/gif" href="<?php echo $baseUrl;?>img/favicon/favicon.gif">
		<link rel="icon" type="image/png" href="<?php echo $baseUrl;?>img/favicon/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-57x57.png" sizes="57x57">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-60x60.png" sizes="60x60">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-72x72.png" sizes="72x72">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-76x76.png" sizes="76x76">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-114x114.png" sizes="114x114">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-120x120.png" sizes="120x120">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-128x128.png" sizes="128x128">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-144x144.png" sizes="144x144">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-152x152.png" sizes="152x152">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-180x180.png" sizes="180x180">
		<link rel="apple-touch-icon" href="<?php echo $baseUrl;?>img/favicon/apple-touch-icon-precomposed.png">
		<link rel="icon" type="image/png" href="<?php echo $baseUrl;?>img/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="<?php echo $baseUrl;?>img/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo $baseUrl;?>img/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo $baseUrl;?>img/favicon/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="<?php echo $baseUrl;?>img/favicon/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo $baseUrl;?>img/favicon/favicon-196x196.png" sizes="196x196">
		<meta name="msapplication-TileImage" content="<?php echo $baseUrl;?>img/favicon/win8-tile-144x144.png"> 
		<meta name="msapplication-TileColor" content="#5682a3"> 
		<meta name="msapplication-navbutton-color" content="#5682a3"> 
		<meta name="application-name" content="JodelBlue"/> 
		<meta name="msapplication-tooltip" content="JodelBlue"/> 
		<meta name="apple-mobile-web-app-title" content="JodelBlue"/> 
		<meta name="msapplication-square70x70logo" content="<?php echo $baseUrl;?>img/favicon/win8-tile-70x70.png"> 
		<meta name="msapplication-square144x144logo" content="<?php echo $baseUrl;?>img/favicon/win8-tile-144x144.png"> 
		<meta name="msapplication-square150x150logo" content="<?php echo $baseUrl;?>img/favicon/win8-tile-150x150.png"> 
		<meta name="msapplication-wide310x150logo" content="<?php echo $baseUrl;?>img/favicon/win8-tile-310x150.png"> 
		<meta name="msapplication-square310x310logo" content="<?php echo $baseUrl;?>img/favicon/win8-tile-310x310.png"> 
	</head>
	
	<body>
		<header>
			<nav class="navbar navbar-full navbar-dark navbar-fixed-top">
				<div class="container">					
					<a id="comment-back" href="./">
						<i class="fa fa-angle-left fa-3x"></i>
					</a>
					<h1>
						<a href="./" class="spinnable">
							JodelBlue <i class="fa fa-refresh fa-1x"></i>
						</a>
					</h1>					
				</div>
			</nav>
		</header>
		
		<div class="mainContent container">		
			<div class="content row">
				<article class="topContent col-sm-12">

					<content id="posts">
						<article id="aboutUs" class="jodel" style="background-color: #5682a3;">
							<content>
								Error: Not Found<br />
								<br />
								The requested URL was not found on this server.
							</content>
							<aside>
								<a href="index.php">
									<i class="fa fa-angle-up fa-3x"></i>
								</a>	
									<br />
								404<br />
								<a href="index.php">
									<i class="fa fa-angle-down fa-3x"></i>
								</a>
							</aside>
							<footer>
								<table>
									<tr>
										<td class="time">
											<span data-tooltip="Time">
												<i class="fa fa-clock-o"></i>
												404s
											</span> 
										</td>
										<td class="comments">
											
										</td>
										<td class="distance">


											<span data-tooltip="Author">
												<i class="fa fa-user-o"></i> JodelBlue |
											</span>
													



											<span data-tooltip="Distance">
												<i class="fa fa-map-marker"></i>
												404 km
											</span>
										</td>
									</tr>
								</table>
							</footer>
						</article>

					</content>
				</article>
			</div>
		</div>
		
		
		<!-- jQuery, Tether, Bootstrap JS and own-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
	</body>
</html>