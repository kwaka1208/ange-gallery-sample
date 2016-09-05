<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<!-- Bootstrap -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="STYLESHEET" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="logo">
							 <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
						</div>
						<nav class="navbar navbar-default" role="navigation">
							<div class="container">
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
									<li class="first"><a href="#">angeについて</a></li>
									<li><a href="#">メンバー</a></li>
									<li><a href="#">あんじゅの写真集</a></li>
									</ul>
								</div>
							</div>
						</nav>
						<!-- /nav -->
					</div>
				</div>
<!-- /header -->