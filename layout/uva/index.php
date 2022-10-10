<!doctype html>
<html>
	<head>
		<title>UFMA virtual</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="css/lightslider.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
<div class="central">
		<nav class="navbar navbar-expand-lg navbar-dark border-bottom cabecalho">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="img/ufma_virtual_logo.png" height="50">
			</a>
			<button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
			  <ul class="menutopo">
					<li class="active"><a class="nav-item" href="cursos-disponiveis.php">Pagina inicial</a></li>
					<li><a class="nav-item" href="meus-cursos.php">Meus cursos</a></li>
					<li><a class="nav-item" href="index.php">Painel</a></li>
			  </ul>
			</div>
			
			<!--área de notificações-->
			<div class="user">
				<div>
					<a href="" class="icone sino">
						<span>2</span>
					</a>
				</div>
				
			  <button class="icouser" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
				<img src="img/ico-user-black.png" class="img-fluid">
			  </button>
			
				  <div class="collapse collapse-horizontal" id="collapseWidthExample">
					<div class="card card-body" style="min-width:200px;">
					  <ul class="nav">
						<li class="nav-link"><a href="" class="text-vermelho-conteporaneo text-none">Área do cliente</a></li>
						<li class="nav-link"><a href="" class="text-vermelho-conteporaneo text-none">Sair</a></li>
					  </ul>
					</div>
				  </div>
			</div>
		  </div>
		</nav>

		<div class="titulo alt mt-4">
			<div class="container"><div class="text-vermelho-conteporaneo d-inline-block">AVA UFMA</div> virtual</div>
		</div>
		<div class="container mt-4">		
			<h4 class="text-center h1 alt text-vermelho-conteporaneo p-4">Conheça nossos cursos online e continue a sua formação conosco e no seu tempo</h4>
			<!--Cursos disponiveis-->	
			<h1 class="titulo"><span>Cursos disponíveis</span></h1>
			<div class="item cursos_disponiveis">
				<ul id="lightslider-demo" class="content-slider">
				<li>
					<div class="thumb"><img src="img/image01.jpeg" class="d-block w-100" alt="..."></div>
					<div class="d-flex py-3 pt-0 justify-content-between text-uppercase">
						<small class="small"><i class="fa-solid fa-handshake"></i> Empreendedorismo</small>
						<small class="small"><b><i class="fa-solid fa-circle text-success"></i> Online</b></small>
					</div>							
					<div>
						<h4 class="text-center h4 text-vermelho-conteporaneo">Elaboração e estruturação de projetos de pesquisas</h4>
						<small class="texto mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan nulla urna, quis fermentum dolor sit amet, consectetur adipiscing elit.</small>
						<a href="" class="btn btn-primary btn-vermelho-conteporaneo rounded-5 m-auto btn-sm d-table px-4">Saiba mais</a>
					</div>
				</li>
				<li>
					<div class="thumb"><img src="img/image02.jpeg" class="d-block w-100" alt="..."></div>
					<div class="d-flex py-3 pt-0 justify-content-between text-uppercase">
						<small class="small"><i class="fa-solid fa-graduation-cap"></i> Educação</small>
						<small class="small"><b><i class="fa-solid fa-circle text-success"></i> Online</b></small>
					</div>							
					<div>
						<h4 class="text-center h4 text-vermelho-conteporaneo">Elaboração e estruturação de projetos de pesquisas</h4>
						<small class="texto mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan nulla urna, quis fermentum dolor sit amet, consectetur adipiscing elit.</small>
						<a href="" class="btn btn-primary btn-vermelho-conteporaneo rounded-5 m-auto btn-sm d-table px-4">Saiba mais</a>
					</div>
				</li>
				<li>
					<div class="thumb"><img src="img/image03.jpeg" class="d-block w-100" alt="..."></div>
					<div class="d-flex py-3 pt-0 justify-content-between text-uppercase">
						<small class="small"><b><i class="fa-sharp fa-solid fa-microchip"></i> Tecnologia</b></small>
						<small class="small"><b><i class="fa-solid fa-circle text-success"></i> Online</b></small>
					</div>							
					<div>
						<h4 class="text-center h4 text-vermelho-conteporaneo">Elaboração e estruturação de projetos de pesquisas</h4>
						<small class="texto mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan nulla urna, quis fermentum dolor sit amet, consectetur adipiscing elit.</small>
						<a href="" class="btn btn-primary btn-vermelho-conteporaneo rounded-5 m-auto btn-sm d-table px-4">Saiba mais</a>
					</div>
				</li>
				</ul>
			</div>
					
		</div>
		
	<!--Rodape-->
	<footer class="rodape">
		<div class="container py-5">
			<div class="row justify-content-between">
				<div class="col-md-12 col-lg-3 media">
					<span class="text-uppercase d-flex mb-4">
					<i class="fa-solid fa-location-dot h2 mb-0"></i>
					<p style="margin-left:1rem"><b>UFMA</b> virtual <small class="d-block">Localização</small></p>
					</span>
					<small class="d-block">Avenida dos Portugueses, 1966, Bacanga  </small>
					<small class="d-block">CEP 65080-805, São Luís, Maranhão, Brasil.</small>
					<small class="d-block"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-c-circle" viewBox="0 0 16 16">
                        <path
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z">
                        </path>
                    </svg> 2022. DTED/UFMA. Todos os direitos reservados.</small>
				</div>
				<div class="col-md-12 col-lg-4">
					<strong class="d-block text-uppercase">Conecte-se</strong>
					<small class="d-block">Pelas redes sociais</small>
					<div class="row mt-3">
						<div class="col-4 col-lg-4 text-center">
							<i class="fab fa-instagram h1 mb-0 m-lg-2"></i>
							<span class="d-block">Instagram <br>UFMA</span>
						</div>
						<div class="col-4 col-lg-4 text-center">
							<i class="fab fa-facebook h1 mb-0 m-lg-2"></i>
							<span class="d-block">Facebook <br>UFMA</span>
						</div>
						<div class="col-4 col-lg-4 text-center">
							<i class="fab fa-youtube h1 mb-0 m-lg-2"></i>
							<span class="d-block">Canal EAD pra você</span>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-3">
					<strong class="d-block text-uppercase">Suporte</strong>
					<small class="d-block">Fale conosco</small>
					<ul>
						<li class="d-inline-block py-2"><i class="fas fa-envelope"></i> ufmavirtual.dted@ufma.br</li>
						<li class="d-inline-block py-2"><i class="fas fa-phone"></i> 0000-0000</li>
						<li class="d-inline-block py-2"><i class="fas fa-comment"></i> Central de atendimento ao aluno</li>
					</ul>
				</div>
			</div>
		</div>
	<div class="border-top">		
		<div class="container py-4 d-flex justify-content-between">
			<ul class="nav">
				<li class="nav-link"><a href="">Início</a></li>
				<li class="nav-link"><a href="">SOBRE</a></li>
				<li class="nav-link"><a href="">Cursos</a></li>
				<li class="nav-link"><a href="">Serviços</a></li>
				<li class="nav-link"><a href="">Conteúdo gratuito</a></li>
				<li class="nav-link"><a href="">Login </a></li>
			</ul>
			<div class="logo"><img src="img/ufma_virtual_logo.png" height="40"></div>
		</div>
	</div>
	</footer>
</div>
<script>
	$function(){		
		$('.carousel').carousel()
	}
</script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/kit-wesome.js"></script>
<script src="js/lightslider.js"></script>
<script src="js/lightslider-mob.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</head>