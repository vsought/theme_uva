<?php
?>

<!doctype html>
<html>
	<head>
		<title>UFMA virtual</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

<body>



    <div class="titulo-wrapper">
        <h1 class="red-color " style="color: #861C40;">Bem-vindo ao ambiente de aprendizagem online da
            <span class="titulo-destaque" >UFMA VIRTUAL</span>
        </h1>
    </div>

    <main class="base_login">
        <div class="login" style="">
            <div class="logo" style="margin-bottom: 25px;">
                <img src="img/ufma_virtual_logo.png" alt="Logo UFMA Virtual">
            </div>
            <div role="main"><span id="maincontent"></span>
                <div class="text-center">
                    <label class="form-error-label bold" for="">Sua sessão expirou. Por favor, identifique-se
                        novamente.</label>
                </div>
                <form class="form-style fix-input" action="https://ava-homologacao.ufmavirtual.ufma.br/login/index.php"
                    method="POST">
                    <input type="hidden" name="logintoken" value="KVitu3vgdwkvZ7I6DkjxI0gThWh2HFeQ">
                    <h2 style="text-align: left;
            margin-bottom: 20px;">
                        <strong>Fazer login</strong>
                    </h2>


                    <div class="input-group mb-3" id="user-email" style="margin-bottom: 10px !important;">
                        <span class="input-group-text" id="basic-addon1"
                            style="border:1px solid #333333;background-color: #A9A9A9;">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input style="border-top: 1px solid #333333;    border-right: 1px solid #333333;   border-bottom: 1px solid #333333;  border-left: none;" type="text" class="form-control" aria-describedby="emailHelp" name="username"
                            id="username" placeholder="Digite seu email" autofocus="">
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"  style="border:1px solid #333333;background-color: #A9A9A9;">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input style="border-top: 1px solid #333333; border-right: 1px solid #333333; border-bottom: 1px solid #333333;border-left: none;" type="password" name="password" id="password" placeholder="Senha"
                            class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <p style="text-align: left; margin-bottom: 0;">
                        Novo Usuário?
                        <a href="https://ava-homologacao.ufmavirtual.ufma.br/login/index.php#" style="color: #861C40;  text-decoration: none;font-weight: bold;  transition-property: all;
                                  transition-duration: 0.5s; transition-timing-function: ease;">
                            Crie uma conta</a>
                    </p>
                    <p style="text-align: left;margin-bottom: 0;">
                        Esqueceu a senha?
                    </p>





                    <input type="submit" value="Conecte-se" class="primary-button" style="border-radius: 20px !important;
      justify-self: center;
      margin-top: 20px;background-color: #861C40;
      color: #FFFFFF;
      border: none;
      font-weight: 500;
      padding: 8px 50px;
      line-height: normal;
      transition-property: all;
      transition-duration: 0.5s;
      transition-timing-function: ease;">
                </form>
            </div>
        </div>
    </main>

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
	
	</footer>
    <div id="h10-xray"></div>
    <div id="h10-xray-keywords"></div>
    <div id="h10-asin-grabber"></div>
    <div id="h10-demand"></div>
    <div id="h10-inventory"></div>
    <div id="h10-profitability-calculator"></div>
    <div id="h10-review"></div>
    <div id="h10-xray-walmart"></div>
    <div id="h10-token-connection"></div>
    <div id="h10-xray-widget"></div>
	
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/kit-wesome.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>

</html>