<!doctype html>
<html>
	<head>
		<title>UFMA virtual</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		
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
					<li><a class="nav-item" href="cursos-disponiveis.php">Pagina inicial</a></li>
					<li class="active"><a class="nav-item" href="meus-cursos.php">Meus cursos</a></li>
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
		
		<div class="row mx-0">
		
		<!-- MENU FIXO LATERAL-->		
		<div  id="navbarSupportedContent" class="col-lg-2 alt" style="padding-left:0">
			<div class="menu-lateral">
				<div class="barra d-flex text-end"><label class="arrow-icon"><input type="checkbox" name="" class="d-none"><i class="fa-solid fa-angle-left text-light"></i></label></div>
				
				<div class="nav-caixa">
				<div class="accordion" id="accordionExample">
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
					  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Geral
					  </button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					   <div class="accordion-body">
							<ul class="menu-item">
								<li><a href="" class="link-dark">Avisos</a></li>
								<li><a href="" class="link-dark">Seja Bem vindo(a)</a></li>
								<li><a href="" class="link-dark">Guia do curso</a></li>
							</ul>
					   </div>
					</div>
				  </div>
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Módulo 1
					  </button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					    <div class="accordion-body">
							<ul class="menu-item">
								<li><a href="" class="link-dark">Avisos</a></li>
								<li><a href="" class="link-dark">Seja Bem vindo(a)</a></li>
								<li><a href="" class="link-dark">Guia do curso</a></li>
							</ul>
						</div>
					</div>
				  </div>
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Módulo 2
					  </button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
					    <div class="accordion-body">
							<ul class="menu-item">
								<li><a href="" class="link-dark">Avisos</a></li>
								<li><a href="" class="link-dark">Seja Bem vindo(a)</a></li>
								<li><a href="" class="link-dark">Guia do curso</a></li>
							</ul>
						</div>
					</div>
				  </div>
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingFor">
					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFor" aria-expanded="false" aria-controls="collapseThree">
							Módulo 3
					  </button>
					</h2>
					<div id="collapseFor" class="accordion-collapse collapse" aria-labelledby="headingFor" data-bs-parent="#accordionExample">
					    <div class="accordion-body">
							<ul class="menu-item">
								<li><a href="" class="link-dark">Avisos</a></li>
								<li><a href="" class="link-dark">Seja Bem vindo(a)</a></li>
								<li><a href="" class="link-dark">Guia do curso</a></li>
							</ul>
						</div>
					</div>
				  </div>
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingFive">
					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
							Fórum
					  </button>
					</h2>
					<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="collapseFive" data-bs-parent="#accordionExample">
					    <div class="accordion-body">
							<ul class="menu-item">
								<li><a href="" class="link-dark">Avisos</a></li>
								<li><a href="" class="link-dark">Seja Bem vindo(a)</a></li>
								<li><a href="" class="link-dark">Guia do curso</a></li>
							</ul>
						</div>
					</div>
				  </div>
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingSix">
					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
							Trajetória educaional
					  </button>
					</h2>
					<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="collapseSix" data-bs-parent="#accordionExample">
					    <div class="accordion-body">
							<ul class="menu-item">
								<li><a href="" class="link-dark">Avisos</a></li>
								<li><a href="" class="link-dark">Seja Bem vindo(a)</a></li>
								<li><a href="" class="link-dark">Guia do curso</a></li>
							</ul>
						</div>
					</div>
				  </div>
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingSeven">
					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
							Biblioteca
					  </button>
					</h2>
					<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="collapseSeven" data-bs-parent="#accordionExample">
					    <div class="accordion-body">
							<ul class="menu-item">
								<li><a href="" class="link-dark">Avisos</a></li>
								<li><a href="" class="link-dark">Seja Bem vindo(a)</a></li>
								<li><a href="" class="link-dark">Guia do curso</a></li>
							</ul>
						</div>
					</div>
				  </div>
				</div>
				</div>
			</div>
		</div>
		<!---->

		<div class="col px-5 basecentral">
			<div class="row mt-4">
				<!--lado direito-->
				<div class="col-md-12 col-lg-12">
					<div class="area_curso_disponovel  p-lg-0">
						<div class="thumbnail mb-4">
							<img src="img/bn-teste.jpg" class="img-fluid">
							<div class="text-dinamico">
								<span class="Tipo">Curso:</span>
								<h2>Redação corporativa</h2>
							</div>
						</div>		
						<hr></hr>
						<!--Links adicionais-->	
						<div class="nav-op mt-2">
							<ul class="nav m-0 position-relative" style="z-index:2">
								<li class="active d-inline-block"><a href="" class="text-dark text-decoration-none">Cursos</a></li>
								<li class="d-inline-block" style="padding-left:1.8rem"><a href="" class="text-dark text-decoration-none">participantes</a></li>
								<li class="d-inline-block" style="padding-left:1.8rem"><a href="" class="text-dark text-decoration-none">Notas</a></li>
							</ul>
						<span></span>
						</div>
						
					</div>
				</div>
								
				<!-- TABS -->
				<div class="col-12">	
						<div class="tab_personalisado">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item" role="presentation">
								<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab01-pane" type="button" role="tab" aria-controls="tab01-pane" aria-selected="true"> Geral</button>
							  </li>
							  <li class="nav-item" role="presentation">
								<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab02-pane" type="button" role="tab" aria-controls="tab02-pane" aria-selected="false">Módulo 1</button>
							  </li>
							  <li class="nav-item" role="presentation">
								<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab03-pane" type="button" role="tab" aria-controls="tab03-pane" aria-selected="false">Módulo 2</button>
							  </li>
							  <li class="nav-item" role="presentation">
								<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab04-pane" type="button" role="tab" aria-controls="tab04-pane" aria-selected="false">Módulo 3</button>
							  </li>
							  <li class="nav-item" role="presentation">
								<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab05-pane" type="button" role="tab" aria-controls="tab05-pane" aria-selected="false">Fórum</button>
							  </li>
							  <li class="nav-item" role="presentation">
								<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab06-pane" type="button" role="tab" aria-controls="tab06-pane" aria-selected="false">Trajetoria educacional</button>
							  </li>
							  <li class="nav-item" role="presentation">
								<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab07-pane" type="button" role="tab" aria-controls="tab07-pane" aria-selected="false">Trajetoria educacional</button>
							  </li>
							</ul>
							<div class="tab-content" id="myTabContent">
							  	<!--Aba 01 avisos-->						  
							  <div class="tab-pane fade show active" id="tab01-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
								
									<div class="accordion accordion-flush accordion-sub" id="accordionFlushExample">
										  <div class="accordion-item">
											<h2 class="accordion-header" id="flush-headingOne">
											  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
												Avisos
											  </button>
											</h2>
										<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">	
											
											<div class="accordion-body">
												<div id="carouselExampleControls" class="carousel slide cursos_disponiveis" data-bs-ride="carousel">
													  <div class="carousel-inner">
														<div class="carousel-item active">
															<div class="card">
																	<div class="card-header bg-dourado text-light">Terça-feira, 02/08/2022 | 09:32: Certificado de conclusão disponível</div>
																	<div class="card-body" style="background:#eee">
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan nulla urna, quis fermentum</p>
																	</div>
															</div>
														</div>
														<div class="carousel-item">
																<div class="card">
																	<div class="card-header bg-dourado text-light">Terça-feira, 02/08/2022 | 09:32: Certificado de conclusão disponível</div>
																	<div class="card-body" style="background:#eee">
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan nulla urna, quis fermentum</p>
																	</div>
																</div>
														</div>
													  </div>
													  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
														<span class="carousel-control-prev-icon" aria-hidden="true"></span>
														<span class="visually-hidden">Previous</span>
													  </button>
													  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
														<span class="carousel-control-next-icon" aria-hidden="true"></span>
														<span class="visually-hidden">Next</span>
													  </button>
												</div>
											</div>
											</div>
											
										  <div class="accordion-item">
											<h2 class="accordion-header" id="flush-headingTwo">
											  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
												Sejam Bem-vindo
											  </button>
											</h2>
											<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
											  <div class="accordion-body">
													<div class="row">
														<div class="col-lg-6 pt-lg-4 pb-lg-4 pt-md-2 pt-md-2">
														<div class="embed-responsive">
															<iframe width="560" height="315" src="https://www.youtube.com/embed/1r0m1cl1TVk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
														</div>
														</div>
														<div class="col-lg-4 d-flex align-items-center">
															<div class="w-100 position-relative">
															<!-- OPções suspença -->
																<div class="dropdown position-absolute" style="right: -49px;">
																		  <button class="border-0 bg-transparent h4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa-solid fa-ellipsis-vertical"></i>
																		  </button>
																		  <ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="#">Action</a></li>
																			<li><a class="dropdown-item" href="#">Another action</a></li>
																			<li><a class="dropdown-item" href="#">Something else here</a></li>
																		  </ul>
																</div>
																<h4>Seja Bem-Vindo(a) ao curso de programação Básica!</h4>
																<small class="h6">Professor Lucas Rocha <br> 145 visualizações há 1 dia</small>
															</div>
														</div>
													</div>
											  </div>
											</div>
										  </div>
										  <div class="accordion-item">
											<h2 class="accordion-header" id="flush-headingThree">
											  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
												Guia do curso
											  </button>
											</h2>
											<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
												<!--Carrosel -->
												<div class="accordion-body">
														<div id="carouselExampleControls2" class="carousel slide cursos_disponiveis" data-bs-ride="carousel">
															<div class="carousel-inner" role="listbox">
																<div class="carousel-item active">
																	<div class="card">
																		<img src="img/image01.jpeg" class="img-fluid">
																	</div>
																</div>
															</div>
															
															<div class="carousel-inner" role="listbox">
																<div class="carousel-item">
																	<div class="card">
																		<img src="img/image02.jpeg" class="img-fluid">
																	</div>
																</div>
															</div>
															<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
																<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																<span class="visually-hidden">Previous</span>
															 </button>
																<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
																<span class="carousel-control-next-icon" aria-hidden="true"></span>
																<span class="visually-hidden">Next</span>
															 </button>
														</div>
													<!----->
												</div>
											</div>
										  </div>
									</div>
							  </div>
							  
							</div>
							
							<!--ABA 02 -->
							<div class="tab-content" id="profile-tab">
							  <div class="tab-pane fade" id="tab02-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
									<div class="base-banner-interna">
										<img src="img/bn-teste.jpg" class="img-fluid">
									</div>
									<div class="nav-op">
										<ul class="nav">
										  <li class="nav-item">
											<b>Vencimento:</b> Em prazo de entrega
										  </li>
										  <li class="nav-item">
											<b>Pontos:</b> 10
										  </li>
										  <li class="nav-item">
											<b>Enviado:</b> Uma ferramenta externa
										  </li>
										</ul>
									</div>
									
									<div class="estrutura_interna_tab">
											<!--cabeçalho-->
											<div class="navbar navbar-expand-lg bg-dourado border-bottom cabecalho">
												 <div class="container-fluid">
													<a class="navbar-brand p-0" href="#">
														<img src="img/ufma_virtual_logo_sombra.png" height="60">
													</a>
													<div class="texto-topo">
														<span class="text-light">Redação corporativa<br> <b>Unidade 1</b> - Efeitos de texto Mal escrito</span>
													</div>
													<div class="porcentagem">
														<span class="text-light"><b>100%</b></span>
													</div>
												</div>
											</div>
											
											<!--conteudo do meio-->
											<div class="conteudo">
												<p>Conteúdo aqui..</p>
											</div>
											
											<!--menu lateral-->
											<div class="menuSup">
												<a href="" class="fa-sharp fa-solid fa-bars"></a>
												<span class="rotate-texto">MENU</span>
											</div>
									</div>	
							 </div>
							</div>
							
						</div>
				</div>
				
			</div>
			
		</div>
		</div>
		
	<!--Rodape-->
	<footer class="rodape">
		<div class="container py-5">
			<div class="row justify-content-between">
				<div class="col-md-12 col-lg-3 media">
					<span class="text-uppercase d-flex mb-4">
					<i class="fas fa-map-marker-alt h2 mb-0"></i>
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

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/kit-wesome.js"></script>
<script src="js/lightslider.js"></script>
<script src="js/lightslider-mob.js"></script>
<script src="js/js_util.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</head>