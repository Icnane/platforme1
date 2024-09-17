<header id="header-top" class="header-top">
		<ul>
			<li>
				<div class="header-top-left">
					<ul>
						<li class="select-opt">
							<select name="language" id="language">
								<option value="default">EN</option>
								<option value="Bangla">BN</option>
								<option value="Arabic">AB</option>
							</select>
						</li>
						<li class="select-opt">
							<select name="currency" id="currency">
								<option value="usd">USD</option>
								<option value="euro">Euro</option>
								<option value="bdt">BDT</option>
							</select>
						</li>
						<li class="select-opt">
							<a href="#"><span class="lnr lnr-magnifier"></span></a>
						</li>
						<li class="header-top-contact" style="position: relative;">
							<a href="#">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
									style="position: fixed; right: 5px; top: 8px; padding: 2px 8px; font-size: 15px; background-color: #ff545a;">
									Se connecter
								</button>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="head-responsive-right pull-right">
				<div class="header-top-right">
					<ul>
						<li class="header-top-contact">
							+226 54141142
						</li>
						<li class="header-top-contact">
							<div class="container mt-5">
							@vite('resources/css/styles.css')
								<h2>Exemple de Modal avec Bootstrap</h2>
								<!-- Bouton pour ouvrir le modal -->
								<div>
								
								</div>
								
								
								<!-- Le Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="modalLabel">LAYFORMATION</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<!-- Formulaire de Connexion -->
												<div id="login-form" class="form-container">
													<h2>Connexion</h2>
													<form action="{{ route('login') }}" method="post">
													@csrf
													<input type="email" name="email" placeholder="Email" required>
													<input type="password" name="password" placeholder="Password" required>
													<button type="submit">Se connecter</button>
												</form>

												<form action="/creer-compte" method="POST">
												@csrf
												<input type="text" name="nom" placeholder="Nom" required>
												<input type="text" name="prenom" placeholder="Prénom" required>
												<select name="sexe" required>
													<option value="homme">Homme</option>
													<option value="femme">Femme</option>
													<option value="autre">Autre</option>
												</select>
												<input type="email" name="email" placeholder="Email" required>
												<input type="password" name="password" placeholder="Mot de passe" required>
												<input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe" required>
												<button type="submit">Créer un compte</button>
											</form>
											</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
												</div>
										</div>
									</div>
								</div>
							</div>

							<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
							<script
								src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
							<script
								src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
						</li>
					</ul>
				</div>
			</li>
		</ul>


	</header><!--/.header-top-->
	<!--header-top end -->

	<!-- top-area Start -->
	<section class="top-area">
		<div class="header-area">
			<!-- Start Navigation -->
			<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
				data-minus-value-mobile="55" data-speed="1000">

				<div class="container">

					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
							<img src="assets/images/WhatsApp_Image_2024-07-05_à_11.11.09_7c7222e6-removebg-preview.png"
								alt="LAYFORMATION" style="height: 50px; margin-right: 10px;">
							LAY<span>FORMATION</span>
						</a>
					</div><!--/.navbar-header-->
					<!-- End Header Navigation -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('formation') }}">Formation</a></li>
        <li><a href="{{ route('inscription') }}">Inscription</a></li>
        <li><a href="{{ route('apropos') }}">À propos de nous</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul><!--/.nav -->
</div><!-- /.navbar-collapse -->
				</div><!--/.container-->
			</nav><!--/nav-->
			<!-- End Navigation -->
		</div><!--/.header-area-->
		<div class="clearfix"></div>

	</section><!-- /.top-area-->
	<!-- top-area End -->

	<!--welcome-hero start -->
	<section id="home" class="welcome-hero">
		<div class="container">
			<div class="welcome-hero-txt">
				<h2>Notre missions est d'offrir de meilleur <br> Formations </h2>
				<p>
					Notre passion est de former cette communautés a moindre couts
				</p>
			</div>
			<div class="welcome-hero-serch-box">
				<div class="welcome-hero-form">
					<div class="single-welcome-hero-form">
						<h3>what?</h3>
						<form action="index.html">
							<input type="text" placeholder="Ex: palce, resturent, food, automobile" />
						</form>
						<div class="welcome-hero-form-icon">
							<i class="flaticon-list-with-dots"></i>
						</div>
					</div>
					<div class="single-welcome-hero-form">
						<h3>location</h3>
						<form action="index.html">
							<input type="text" placeholder="Ex: Ouagadougou, Burkina Faso" />
						</form>
						<div class="welcome-hero-form-icon">
							<i class="flaticon-gps-fixed-indicator"></i>
						</div>
					</div>
				</div>
				<div class="welcome-hero-serch">
					<button class="welcome-hero-btn" onclick="window.location.href='#'">
						search <i data-feather="search"></i>
					</button>
				</div>
			</div>
		</div>

	</section><!--/.welcome-hero-->
	<!--welcome-hero end -->

	<!--list-topics start -->
	<header>
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<img src="assets/images/vector-computer-icon-symbol-sign.jpg" alt=""
										style="height: 50px; margin-right: 10px;">
								</div>
								<h2><a href="#">Informatique et developpement Web</a></h2>
								<p>150 cours</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<img src="assets/images/9796843-icone-caducee-sante-sur-fond-blanc-symbole-medical-style-plat-serpent-medical-logo-caducee-signe-medecine-vectoriel.jpg"
										alt="" style="height: 50px; margin-right: 10px;">
								</div>
								<h2><a href="#">Santé et services sociaux</a></h2>
								<p>214 cours</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<img src="assets/images/energy-icon-png-1.jpg" alt=""
										style="height: 50px; margin-right: 10px;">
								</div>
								<h2><a href="#">Energie et environnement</a></h2>
								<p>185 cours</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<img src="assets/images/basic-rgb-173563607.webp" alt=""
										style="height: 50px; margin-right: 10px;">
								</div>
								<h2><a href="#">Administration des affaires</a></h2>
								<p>200 cours</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<img src="assets/images/7171933.png" alt=""
										style="height: 50px; margin-right: 10px;">
								</div>
								<h2><a href="#">Formation artistique</a></h2>
								<p>120 cours</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<img src="assets/images/why-us-icon-04.png" alt=""
										style="height: 50px; margin-right: 10px;">
								</div>
								<h2><a href="#">Formation logistique</a></h2>
								<p>214 cours</p>
							</div>
						</li>
					</ul>
					<section id="works" class="works">
						<div class="section-header">
							<h2> <i><a href="formation.html"><input type="button" value="Voir plus..."></a></i></h2>


						</div><!--/.container-->
	</header>
</section>