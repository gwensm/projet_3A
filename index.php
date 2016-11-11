<!DOCTYPE html>
<html>
	<head>
		<title> Upload.class - Page de test </title>		
		<meta charset="UTF-8">	
					
</head>	
	<body>
		<h1> Fonction upload - Page de test </h1>
		<form class="form-inline" name="form_post" method="post" action="controller/contact.php">
        <div class="form-group col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12">
          <label class="sr-only" for="exampleInputEmail3"  >E-mail</label>
          <input type="email" class="myform-control" name="email" id="exampleInputEmail3" >
        </div>
        <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-13">
          <input type="text" class="myform-control" name="name" placeholder="Votre nom">
        </div>
        <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <input type="text" class="myform-control" name="job" placeholder="Votre métier">
        </div>
        <div class="row">
      <div class=" col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 margin-top-2" >
        <textarea class="form-control" rows="5" name="message" placeholder="Écrivez votre message..."></textarea>
      </div>
    </div>
        <div class="row">
        <button type="submit" class="btn btn-green margin-top-2 col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-4 col-xs-offset-4">Envoyer</button>
    </div>
      </form>

	</body>
</html>
