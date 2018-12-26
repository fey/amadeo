<!doctype html>
<html lang="ru">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- font-awesome -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	<title>@yield('title')</title>
</head>
<body>
	<!-- Logo -->
	<div id="head_bg">
	</div>

	<!-- Меню - разделы сайта -->
	@include('components.navigation')

	<!-- Body -->
	<div class="container-fluid">
		<div class="row">

			<!-- Статус сервера -->
			@include('components.server-status')

			<!-- Блоки вывода соответствующего раздела сайта -->
			<div class="col-sm-12 col-md-6 order-3 order-md-1 mt-3" id="bg-block">
				<div class="tab-content" id="pills-tabContent">

					<!-- Раздел - "Главная" -->
					@include('components.news')

					<!-- Раздел - "О сервере" -->
					@include('components.about')

					<!-- Раздел - "Регистрация" -->
					@include('components.register')
					<!-- Раздел - "Файлы" -->
					@include('components.files')
					<!-- Раздел - "Статистика" -->
					@include('components.statistics')
					<!-- Раздел - "База знаний" -->
					@include('components.gamedb')
					<!-- Раздел - "Пожертвования" -->
					@include('components.donations')
				</div>
			</div>

			<!-- Личный Кабинет -->
			@include('components.cabinet')
		</div>
	</div>
	<!--
	<div class="container-fluid fixed-bottom mt-3" id="footer">
		<div class="row centered">
			<div class="col text-center">Copyright &copy; 2018 Amadeo</div>
		</div>
	</div>
-->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>