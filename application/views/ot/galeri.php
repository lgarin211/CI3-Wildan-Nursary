
<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Multiverse by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?=base_url('assets/multiverse/')?>assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?=base_url('/assest/multiverse/')?>assets/css/noscript.css"/></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="<?=base_url('/')?>"><img src="<?=base_url('assets/img/produk/head.jpg');?>" width="100px"  class="d-inline-block align-top" alt="" loading="lazy"></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon solid fa-info-circle">About</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
                        <?foreach ($db as $key => $value) :?>
						<article class="thumb">
							<a href="<?=base_url('assets/img/dam/'.$value->img_link)?>" class="image"><img src="<?=base_url('assets/img/dam/'.$value->img_link)?>" alt="" /></a>
							<h2>Magna feugiat lorem</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
                        </article>
                        <?endforeach?>

					</div>

				<!-- Footer -->
					
			</div>

		<!-- Scripts -->
			<script src="<?=base_url('assets/multiverse/')?>assets/js/jquery.min.js"></script>
			<script src="<?=base_url('assets/multiverse/')?>assets/js/jquery.poptrox.min.js"></script>
			<script src="<?=base_url('assets/multiverse/')?>assets/js/browser.min.js"></script>
			<script src="<?=base_url('assets/multiverse/')?>assets/js/breakpoints.min.js"></script>
			<script src="<?=base_url('assets/multiverse/')?>assets/js/util.js"></script>
			<script src="<?=base_url('assets/multiverse/')?>assets/js/main.js"></script>

	</body>
</html>