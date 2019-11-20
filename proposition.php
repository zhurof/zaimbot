<?php	include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li><a href="city.php">Займы и кредиты в Москве</a></li>
					<li>МАНИМЕН (MONEY MEN)</li>
				</ul>
			</div>
		</div>
		<div class="sidebar-block">
			<div class="wrapper sidebar-block__wrapper">
				<div class="sidebar-block__content">					
					<div class="good">
						<div class="good__body">
							<div class="good__main">
								<div class="good__head">
									<h1 class="good__title">viva деньги</h1>
									<img src="img/catalog/viva.png" alt="" class="good__logo">
								</div>
								<div class="good__content">
									<table class="good__chars">
										<tbody>
											<tr>
												<td>Рейтинг:</td>
												<td>
													<span class="rating good__rating">
														<span class="rating__value">7,8</span>
														<i class="icon-star rating__star rating__star--active"></i>
														<i class="icon-star rating__star rating__star--active"></i>
														<i class="icon-star rating__star rating__star--active"></i>
														<i class="icon-star rating__star rating__star--active"></i>
														<i class="icon-star rating__star"></i>
													</span>
												</td>
											</tr>
											<tr>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Сайт</td>
												<td><a href="//moneyman.ru" target="_blank">moneyman.ru</a></td>
											</tr>
											<tr>
												<td>Лицензия</td>
												<td>2110177000478</td>
											</tr>
											<tr>
												<td>График работы</td>
												<td>Круглосуточно, ежедневно</td>
											</tr>
											<tr>
												<td>Телефон</td>
												<td>8 (800) 600 1212</td>
											</tr>
											<tr>
												<td>Email</td>
												<td><a href="mailto:welcom@moneymen.com">welcom@moneymen.com</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>	
							<div class="good__footer">
								<button class="btn btn--high btn--gray good__btn">Оставить отзыв</button>
								<button class="btn btn--high good__btn">Подать заявку</button>
							</div>
						</div>
						<div class="good__text">
							<h4>О VIVA ДЕНЬГИ</h4>
							<p>Обращение в нашу компанию выгоднее кредита в банке или другой кредитной организации, поскольку у нашей системы есть следующие преимущества: </p>
							<ul>
								<li>мы предоставляем деньги максимально быстро;</li>
								<li>есть программа лояльности для постоянных клиентов;</li>
								<li>не требуется пакет документов, обязательный для получения кредита в банке;</li>
								<li>простые и прозрачные условия сотрудничества;</li>
								<li>график платежей, который всегда можно посмотреть в личном кабинете;</li>
								<li>возможность получить деньги наличными или получить онлайн займ на карту; </li>
								<li>минимальная переплата, которая делает продукт оптимальным вариантом во многих ситуациях.</li>
							</ul>
						</div>
					</div>
					<div class="reviews">
						<h2 class="reviews__title">Отзывы</h2>
						<div class="reviews__content">
							<?for($i=0;$i<3;$i++):?>
							<div class="review">
								<div class="review__text">Я услугами Манимена пользуюсь уже давно. Как краткосрочный кредит вполне нормально. А вот для больших кредитов я бы пересмотрела условия. Ведь я с 70 тысяч за 4 месяца переплатила почти столько же, сколько взяла в долг. Можно и более выгодные проценты для таких клиентов предусмотреть.</div>
								<div class="review__info">
									<h4 class="review__name">Иван Иванов</h4>
									<div class="review__date">22 сентября 2019</div>
									<div class="rating review__rating">
										<span class="rating__value rating__value--big-space">7</span>
										<i class="icon-star rating__star rating__star--active"></i>
										<i class="icon-star rating__star rating__star--active"></i>
										<i class="icon-star rating__star rating__star--active"></i>
										<i class="icon-star rating__star rating__star--active"></i>
										<i class="icon-star rating__star"></i>
									</div>
								</div>
							</div>
							<?
									if($i<2){
										echo "<hr/>";
									}
								endfor;
							?>
						</div>
						<div class="reviews__footer">
							<a href="#">Еще Отзывы</a>
						</div>
					</div>
					<div class="form-block">
						<h2 class="form-block__title">Оставить отзыв</h2>
						<form action="" class="form-block__inner">
							<div class="box form-block__box">
								<label class="field form-block__field">
									<span class="field__label">Ваше имя</span>
									<input type="text" />
								</label>
								<label class="field form-block__field">
									<span class="field__label">Ваша почта</span>
									<input type="email" />
								</label>
								<div class="field form-block__field">
									<div class="field__label">Оценка</div>
									<div class="rating-field">
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star rating-field__star--active"></i>
										<i class="icon-star rating-field__star"></i>
										<input type="hidden" class="rating-field__value" value="9">
									</div>
								</div>
								<label class="field form-block__field">
									<span class="field__label">Ваш отзыв</span>
									<textarea rows="7"></textarea>
								</label>
							</div>
							<!--имитация капчи. Класс можно будет оставить, он все равно для отступов -->
							<img src="img/captcha.jpg" alt="" class="form-block__captcha" />
							<button class="btn btn--big btn--high btn--blue form-block__btn">Отправить отзыв</button>
						</form>
					</div>
				</div>
				<? include "aside.php";?>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	