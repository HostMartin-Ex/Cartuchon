<html>
<head>
<meta charset="utf-8">
<title>Back_Cartuchon</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
</head>

<body>
	<header>
		<nav class="navbar navbar-dark special-color-dark">
		  <a class="navbar-brand" href="#">
			<img src="img\LOGO.png" height="30" class="d-inline-block align-top"
			  alt="mdb logo"> Eliminar TINTAS,CARTUCHOS y TONER
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/back/index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/back/insertar_ttc.php">Insertar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/back/modificar_ttc.php">Modificar</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
        </a>
      </li>
    </ul>
  </div>
		</nav>
	</header>
	<div class="container">
		<div class="row pt-4">
			<div class="col-lg-6 col-sm-12">
				<form action="eliminar_cartucho.php" method="post" class="border border-light p-5">
					<p class="h4 mb-4 text-center">Eliminar Cartucho</p>
					<label for="textInput">ID</label>
					<input type="text" name="Uno" id="Uno" class="form-control mb-4">
			    	<button class="btn btn-info btn-block my-4" type="submit">Eliminar</button>
				</form>		
			</div>
					<div class="col-lg-6 col-sm-12">
						<form action="eliminar_tinta.php" method="post" class="border border-light p-5">
							<p class="h4 mb-4 text-center">Eliminar tinta</p>
							<label for="textInput">ID</label>
							<input type="text" name="Dos" id="Dos" class="form-control mb-4">
							<button class="btn btn-info btn-block my-4" type="submit">Eliminar</button>
						</form>
					</div>
		</div>
		<div class="row pt-4">
			<div class="col-lg-6 col-sm-12">
				<form action="eliminar_toner.php" method="post" class="border border-light p-5">
					<p class="h4 mb-4 text-center">Eliminar toner</p>
					<label for="textInput">ID</label>
					<input type="text" name="Tres" id="Tres" class="form-control mb-4">
					<button class="btn btn-info btn-block my-4" type="submit">Eliminar</button>
				</form>
			</div>
		</div>
	</div>
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
</body>
</html>