					<div class="tab-pane fade show" id="pills-registr" role="tabpanel" aria-labelledby="pills-registr-tab">
						<h2 class="text-center">Регистрация</h2>
						<div class="pt-3">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inpuLogin">Логин</label>
										<input type="login" class="form-control" id="inputLogin" placeholder="Придумайте Пароль">
									</div>
									<div class="form-group col-md-6">
										<label for="inputEmail">Email</label>
										<input type="Email" class="form-control" id="inputEmail" placeholder="Введите Email">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inpuPassword">Пароль</label>
										<input type="Password" class="form-control" id="inputPassword" placeholder="Придумайте Пароль">
									</div>
									<div class="form-group col-md-6">
										<label for="inputEmail">Подтверждение Пароля</label>
										<input type="Email" class="form-control" id="inputEmail" placeholder="Повторите Пароль">
									</div>
								</div>

								<!-- добавление элемента div -->
								<div class="g-recaptcha" data-sitekey="6KepjAsTFFFFFFMqccY0ZiGqc3TEd3YVxo8cHsGX"></div>

								<!-- элемент для вывода ошибок -->
								<div class="text-danger" id="recaptchaError"></div>

								<!-- js-скрипт гугл капчи -->
								<script src='https://www.google.com/recaptcha/api.js'></script>

								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck">
										<label class="form-check-label" for="gridCheck">
										- подписаться на рассылку новостей портала Amadeo.
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck">
										<label class="form-check-label" for="gridCheck">
										- согласен(а) с правилами сервера.
										</label>
									</div>
								</div>
								<button type="button" class="btn btn-warning" href="#">Зарегистрироваться</button>
							</form>
						</div>
					</div>
