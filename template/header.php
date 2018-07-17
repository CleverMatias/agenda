<?php 	
//$url = 'http://localhost/agenda0912/';
$url = 'http://matias.byethost8.com/';
		
?>
<!DOCTYPE html> 
<html>
<head>
          <!-- Global site tag (gtag.js) - Google Analytics -->
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110060610-1"></script>
         <script>
              window.dataLayer = window.dataLayer || [];
             function gtag(){dataLayer.push(arguments);}
             gtag('js', new Date());

            gtag('config', 'UA-110060610-1');
         </script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>agenda</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<nav class="navbar navbar-default">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#important-id-for-collapsing" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">NFibra</a>
						</div>
						<div class="collapse navbar-collapse" id="important-id-for-collapsing">
							<ul class="nav navbar-nav">
								<li><a href="/">Agenda</a></li>
								<li><a href="<?php echo $url; ?>procedimentos.php">Procedimentos</a></li>
								<li><a href="#">Link #3</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<!-- Fim menu -->
		