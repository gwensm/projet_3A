<!doctype html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> <?php echo PAGE_TITLE ; ?></title>
	<link rel="stylesheet" href="assets/css/monstyle.css"> 
	<link rel="stylesheet" href="assets/css/font.css">  
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/mixins.css">
	<link rel="stylesheet" href="assets/css/variables.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<img  class="col-lg-3 col-md-3 col-sm-3 hidden-xs img-style-2 margin-top-5" src="assets/img/plat-page-one.jpg" alt="image-plat-pronto">
		<div class="col-lg-8 col-md-9 col-sm-8 col-xs-12 margin-top-5">
			<p id="logo" class="text-center margin-top-5">Pronto!</p>
			<h2 class="text-center h2-style-2 my-black">Le logiciel de gestion de votre cuisine.</h2>
			<h3 class="text-center light-weight padding-all-5 base-line col-xs-12">Gérez vos <span class="my-green">stocks</span>, vos <span class="my-green">coûts</span>, vos <span class="my-green">recettes</span> en tout simplicité grâce à Pronto ! Plus d’informations à venir bientôt !</h3>
			<div class="form-waiting-page">
				<p class="text-center light-weight margin-top-10 margin-bottom-5">N’en perdez pas une miette, inscrivez-vous à notre newsletter !</p>
				<form class="form-inline text-center">
					<div class="form-group col-lg-4 col-lg-offset-3 col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<label class="sr-only " for="emailNewsletter">Email address</label>
						<input type="email" class="myform-control" id="emailNewsletter" name="newsletter" placeholder="Entrez votre adresse mail">
					</div>
					<button type="submit" class="btn btn-green col-lg-2 col-md-2 col-sm-4 col-xs-8 hidden-xs">Abonnez vous</button>
					<button type="submit" class="btn btn-green col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xs-offset-4 hidden-lg hidden-md hidden-sm">Abonnez vous</button>
				</form>
			</div>
		</div>
	</div>
	<div class="row text-center">
		<img src="assets/img/down-arrow.png" class="text-center arrow-down" width="18px">
	</div>
	<div class="row">
		<hr class="visible-xs visible-sm visible-lg visible-md margin-top-5">
		<h3 class="text-center light-weight col-xs-10 col-xs-offset-1 margin-bottom-5"> Vous avez une question ? Envoyez nous un message!<h3>
		<form class="form-inline">
			<div class="form-group col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12">
				<label class="sr-only" for="exampleInputEmail3" >E-mail</label>
				<input type="email" class="myform-control" id="exampleInputEmail3" placeholder="Votre adresse mail">
			</div>
			<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-13">
				<input type="text" class="myform-control" placeholder="Votre nom">
			</div>
			<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<input type="text" class="myform-control" placeholder="Votre métier">
			</div>
		</form>
	</div>
	<div class="row">
		<div class=" col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 margin-top-2" >
			<textarea class="form-control" rows="5" placeholder="Écrivez votre message..."></textarea>
		</div>
	</div>
	<div class="row">
		<button type="submit" class="btn btn-green margin-top-2 col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-4 col-xs-offset-4">Envoyer</button>
	</div>
	<div class="row">
		<p id="footer"> Tous droits réservés | © Copyright 2016 </p>
	</div>
</div>
</body>
</html>
