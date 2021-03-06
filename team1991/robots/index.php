<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="theme-color" content="#FF9800">
	<title>Team 1991</title>
	
	<!-- Materialize Main styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	
	<!-- Menu -->
	<link rel="stylesheet" href="../assets/menu/menu.min.css">
</head>

<body>
	<noscript id="deferred-styles">
		<!-- Material Icons -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
		
		<!-- Custom styles -->
		<link rel="stylesheet" type="text/css" href="../assets/application.min.css"/>
	</noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
	
	<header class="menu z-depth-1" style="display: block;">
		<div class="center-column">
			<div class="header-items">
				<a class="logo-region" href="/">
					<div class="logotype"></div>
				</a>
				<div class="nav-items">
					<a class="nav-link" href="/"><span>Home</span></a>
					<a class="nav-link" href="/about/"><span>About</span></a>
					<a class="nav-link" href="/photos/"><span>Photos</span></a>
					<a class="nav-link" href="/awards/"><span>Awards</span></a>
					<a class="nav-link" href="/first/"><span><i>F.I.R.S.T.</i></span></a>
					<a class="nav-link" href="/sponsors/"><span>Sponsors</span></a>
				</div>

				<div class="hamburger">
					<div class="dash a"></div>
					<div class="dash b"></div>
					<div class="dash c"></div>
				</div>
			</div>
		</div>
		<div class="dropdown-menu-wrapper count6">
			<div class="dropdown-menu">
				<a class="nav-link" href="/">Home</a>
				<a class="nav-link" href="/about/">About</a>
				<a class="nav-link" href="/photos/">Photos</a>
				<a class="nav-link" href="/awards/">Awards</a>
				<a class="nav-link" href="/first/"><i>F.I.R.S.T.</i></a>
				<a class="nav-link" href="/sponsors/">Sponsors</a>
			</div>
		</div>
	</header>
	<div class="header-space"></div>
	
	<main>
		<div class="container">
			<div class="col m12">
				<!-- Team -->
				<div class="card">
					<div class="card-content header-content">
						<span class="card-title"><h1>Team 1991</h1></span>
					</div>
				</div>
				
				<!-- Robots -->
				<div class="card">
					<div class="card light-blue lighten-4">
						<div class="card-content">
							<div class="header-content">
								<span class="card-title"><h4>Robots</h4></span>
							</div>
						</div>
					</div>
				</div>
				
				<!-- 2016 Robot -->
				<div class="video-container">
					<script src="https://embed.github.com/view/3d/patkub/team1991-website/blob/master/team1991/robots/robot.stl"></script>
				</div>
			</div>
			
			<!-- robot grid -->
			<style>
			@media (min-width: 768px) {
				.grid-item {
					width: 50%;
					padding-right: 10px;
				}
			}

			.feature-img {
				height: 400px;
			}
			</style>
			
			<div id="grid" class="grid">
				<div class="grid-sizer"></div>
				
				<!-- 2016 -->
				<div class="grid-item">
					<div class="card">
						<div class="card-image feature-img">
							<img src="../assets/images/robots/2016.jpg">
						</div>
						<div class="card-content">
							<div class="header-content">
								<span class="card-title"><h4>2016</h4></span>
								Robot for the 2016 Stronghold game.
							</div>
						</div>
					</div>
				</div>
				
				<!-- 2015 -->
				<div class="grid-item">
					<div class="card">
						<div class="card-image feature-img">
							<img src="../assets/images/robots/2015.jpg">
						</div>
						<div class="card-content">
							<div class="header-content">
								<span class="card-title"><h4>2015</h4></span>
								Robot for the 2015 Recycle Rush game.
							</div>
						</div>
					</div>
				</div>
				
				<!-- 2014 -->
				<div class="grid-item">
					<div class="card">
						<div class="card-image feature-img">
							<img src="../assets/images/robots/2014.jpg">
						</div>
						<div class="card-content">
							<div class="header-content">
								<span class="card-title"><h4>2014</h4></span>
								Robot for the 2014 Aerial Assist game.
							</div>
						</div>
					</div>
				</div>
				
				<!-- 2013 -->
				<div class="grid-item">
					<div class="card">
						<div class="card-image feature-img">
							<img src="../assets/images/robots/2013.jpg">
						</div>
						<div class="card-content">
							<div class="header-content">
								<span class="card-title"><h4>2013</h4></span>
								Robot for the 2013 Ultimate Ascent game.
							</div>
						</div>
					</div>
				</div>
				
				<!-- 2012 -->
				<div class="grid-item">
					<div class="card">
						<div class="card-image feature-img">
							<img src="../assets/images/robots/2012.jpg">
						</div>
						<div class="card-content">
							<div class="header-content">
								<span class="card-title"><h4>2012</h4></span>
								Robot for the 2012 Rebound Rumble game.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<footer class="page-footer grey lighten-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="grey-text darken-1">Team 1991</h5>
					<p class="grey-text">FRC Team 1991 The Dragons</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="grey-text darken-1">Links</h5>
					<ul>
						<li><a class="grey-text" href="https://www.github.com/patkub/team1991-website/" target="_blank"><i class="fa fa-github left"></i>Github</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="footer-copyright">
			<div class="container black-text">
				&copy; <?php echo date("Y") ?> <a class="black-text" href="http://www.antuple.net/" target="_blank">Antuple</a>
				<a class="black-text right">Patrick Kubiak</a>
			</div>
		</div>
	</footer>
	
	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

	<!-- Materialize compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

	<!-- Menu -->
	<script src="../assets/menu/menu.min.js"></script>
</body>
</html>
