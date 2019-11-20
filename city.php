<?php	include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li>Займы и кредиты в Москве</li>
				</ul>
			</div>
		</div>
		<div class="map-block">
			<div class="wrapper map-block__wrapper">
				<div class="map-block__map" id="map"></div>
			</div>
		</div>
		<div class="sidebar-block">
			<div class="wrapper sidebar-block__wrapper">
				<div class="sidebar-block__content">					
					<div class="catalog">
						<div class="catalog__head">
							<h1>Займы и кредиты В МОСКВЕ</h1>
							<div class="filter">
								<a href="#" class="filter__item">Наличными курьером</a>
								<a href="#" class="filter__item">На банковскую карту</a>
								<a href="#" class="filter__item">На QIWI кошелек</a>
								<a href="#" class="filter__item">На Яндекс деньги</a>
								<a href="#" class="filter__item">Через систему Contackt</a>
								<a href="#" class="filter__item">В офисе компании</a>
								<a href="#" class="filter__item">Банковским переводом</a>
								<a href="#" class="filter__item">Банковским переводом</a>
								<a href="#" class="filter__item">На WebMoney кошелек</a>
							</div>
						</div>
						<div class="catalog__section">
							<?
								$cards = [
									['title'=>'МигКредит','img'=>'mig.svg','active'=>true],
									['title'=>'Быстроденьги','img'=>'quickmoney.svg','active'=>true],
									['title'=>'viva деньги','img'=>'viva.png']
								];
								foreach($cards as $index=>$card){
									include 'card.php';
									if($index + 1 < count($cards)){
										echo "<hr/>";
									}
								}
							?>
						</div>
						<form class="order" action="">
							<div class="order__main">
								<div class="order__head">
									<h2 class="order__title">Подобрать заем</h2>
									<span class="order__toggler" tabindex="0"><span>Дополнительные параметры</span></span>
								</div>
								<div class="order__body">
									<div class="order__column">
										<label class="field order__field">
											<span class="field__label">Способ выдачи</span>
											<select>
												<option>Любой</option>
												<option>Курьером</option>
												<option>Онлайн</option>
											</select>
										</label>
									</div>
									<div class="order__column">
										<div class="field order__field">
											<span class="field__label">Сумма</span>
											<span class="range-input">
												<input type="text" readonly tabindex="-1">
												<input type="range" min="100" max="10000" step="50" value="1" />
											</span>
										</div>
									</div>
									<div class="order__column">
										<div class="field order__field">
											<span class="field__label">Сроки</span>
											<span class="term-input">
												<input type="number" min="1"/>
												<select>
													<option>Дней</option>
													<option>Недель</option>
													<option>Месяцев</option>
												</select>
											</span>
										</div>
									</div>
								</div>
								<div class="order__footer">
									<div class="order__result">Переплата за сутки: <strong>300 руб</strong></div>
									<div class="order__result">Переплата за весь период: <strong>9 000 руб</strong></div>
									<div class="order__result">Итого  к возврату: <strong>39 000 руб</strong></div>
									<button class="btn btn--blue order__btn">Подобрать</button>
								</div>
							</div>
							<div class="order__additional">
								<div class="order__column">
									<label class="field order__field">
										<span class="field__label">Оформление</span>
										<select>
											<option>Не важно</option>
											<option>Онлайн</option>
											<option>В офисе</option>
										</select>
									</label>
									<label class="field order__field">
											<span class="field__label">Кредитная история</span>
											<select>
												<option>Не важно</option>
												<option>Положительная</option>
												<option>Отрицательная</option>
											</select>
										</label>
								</div>
								<div class="order__column">
									<label class="field order__field">
										<span class="field__label">Время рассмотрения</span>
										<select>
											<option>В течении 30 минут</option>
											<option>В течении часа</option>
											<option>В течении вечности</option>
										</select>
									</label>
									<label class="field order__field">
										<span class="field__label">Способ погашения</span>
										<select>
											<option>Не важно</option>
											<option>Отдать квартиру</option>
											<option>Продать почку</option>
										</select>
									</label>
								</div>
								<div class="order__column order__column--checkbox-group">
									<label class="label"><input type="checkbox"/><span>С плохой кредитной историей</span></label>
									<label class="label"><input type="checkbox"/><span>Без справок и поручителей</span></label>
									<label class="label"><input type="checkbox"/><span>Без отказа</span></label>
								</div>
							</div>
						</form>
						<div class="catalog__section">
							<?
								$cards = [
									['title'=>'МигКредит','img'=>'mig.svg','active'=>true],
									['title'=>'Быстроденьги','img'=>'quickmoney.svg','active'=>true],
									['title'=>'viva деньги','img'=>'viva.png']
								];
								foreach($cards as $index=>$card){
									include 'card.php';
									if($index + 1 < count($cards)){
										echo "<hr/>";
									}
								}
							?>
						</div>
						<ul class="pagination catalog__pagination">
							<li><a href="#"><<</a></li>
							<li class="active"><a href="#">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li><a href="#">04</a></li>
							<li><a href="#">05</a></li>
							<li><a href="#">…</a></li>  
							<li><a href="#">16</a></li>  
							<li><a href="#">>></a></li>
						</ul>
					</div>					
				</div>
				<? include "aside.php";?>
			</div>
		</div>
		<div class="text-block">
			<div class="wrapper">
				<div class="text-block__sidebar-imitation">
					<p>Иногда случается так, что деньги нужны не просто срочно, а практически сиюминутно. В этом случае одним из решений проблемы может стать микрокредитование в режиме on-line, позволяющее получить необходимые денежные средства в рекордно короткие сроки.</p>
					<p>Сам процесс предельно прост: заполнив электронную заявку на сайте кредитной организации, нужно лишь дождаться ее одобрения и, в случае положительного ответа, воспользоваться пришедшими на указанный счет деньгами. Эта, пользующаяся спросом в последние несколько лет услуга, предоставляется многочисленными МФО (микро-финансовыми организациями) и характеризуется определенными условиями, самыми важными из которых являются.</p>
				</div>
			</div>
		</div>
	</main>
	<!-- api карт грузим только там, где надо. Для производительности -->
	<script  src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&#038;ver=1"></script>
<?php	include "footer.php";?>	