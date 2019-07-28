	<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-center text-center" id="navbarSupportedContent">
			<div class="nav navbar-nav" id="pills-tab" role="tablist" aria-orientation="vertical">
        @if (Route::has('home'))
				<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Главная</a>
        @endif
        @if (Route::has('about'))
				<a class="nav-link" id="pills-server-tab" data-toggle="pill" href="#pills-server"  aria-controls="pills-server" aria-selected="true">О сервере</a>
        @endif
        @if (Route::has('register') && Auth::guest())
		 		<a class="nav-link" id="pills-registr-tab" data-toggle="pill" href="#pills-registr"  aria-controls="pills-registr" aria-selected="true">Регистрация</a>
        @endif
        @if (Route::has('files'))
				<a class="nav-link" id="pills-file-tab" data-toggle="pill" href="#pills-file" role="tab" aria-controls="pills-file" aria-selected="true">Файлы</a>
        @endif
        @if (Route::has('forum'))
				<a class="nav-link" id="pills-forum-tab" data-toggle="pill" href="#pills-forum" role="tab" aria-controls="pills-forum" aria-selected="true">Форум</a>
        @endif
        @if (Route::has('gamestats'))
				<a class="nav-link" id="pills-stat-tab" data-toggle="pill" href="#pills-stat" role="tab" aria-controls="pills-stat" aria-selected="true">Статистика</a>
        @endif
        @if (Route::has('gamedb'))
				<a class="nav-link" id="pills-bd-tab" data-toggle="pill" href="#pills-bd" role="tab" aria-controls="pills-bd" aria-selected="true">База знаний</a>
        @endif
        @if (Route::has('donations'))
				<a class="nav-link" id="pills-donate-tab" data-toggle="pill" href="#pills-donate" role="tab" aria-controls="pills-donate" aria-selected="true">Пожертвования</a>
        @endif
			</div>
		</div>
	</nav>
