<!DOCTYPE html>
<html>
    <head>
        <title>Oskar Website</title>
		
        @include('partials.libraries')
		<!-- My own global css file -->
		<link rel="stylesheet" href="css/pages/stylesheet.css">
		<!-- Classuc elegant font to use for the site -->
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
		
    </head>
	
    <body>
		<header>
		
		<!-- Del av koden som tar hand om account menyn och det som kan vara indirekt kopplat till själva spelet så som account hantering eller info om företaget -->
			<div class="account-bar_container">
				<div class="account-bar">
					<div class="account-bar-inner">
						<div class="account-bar-content">
							<div class="ab-company ab-link-pad">
								<p>Company Name</p>
							</div>
							<div class="ab-temp ab-link-pad"><a href="#">Future link</a></div>
							<div class="ab-temp ab-link-pad"><a href="#">Future link</a></div>
							<div class="ab-signin ab-link-pad"><a href="#">Sign In</a></div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Del av koden som tar hand om menyn där man kan navigera sig genom sidan. -->
			<div class="header_bg">
				<div class="header_container">
					<nav>
						<ul class="main-menu">
							<li class="menu-btn Game_Link"><a href="#">Game Link</a></li>
							<li class="menu-btn"><a href="#">News</a></li>
							<li class="menu-btn"><a href="#">Community</a></li>
							<li class="menu-btn Play_Now"><a href="#">Play Now</a></li>
						</ul>
					</nav>
				</div>
			</div>
			
		</header>
		
		
    </body>
</html>
