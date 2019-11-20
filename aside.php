<aside class="sidebar-block__sidebar">
	<?
		if(basename($_SERVER['REQUEST_URI']) != 'proposition.php'):
	?>
	<div class="menu">
		<h3 class="menu__title">Способы получения</h3>
		<ul class="menu__list">
			<li class="active"><a href="#">Наличными курьером</a></li>
			<li><a href="#">На банковскую карту</a></li>
			<li><a href="#">На QIWI кошелек</a></li>
			<li><a href="#">На Яндекс деньги</a></li>
			<li><a href="#">Через систему Contact</a></li>
			<li><a href="#">В офисе компании</a></li>
			<li><a href="#">Банковским переводом</a></li>
			<li><a href="#">На WebMoney кошелек</a></li>
		</ul>
	</div>
	<?endif;?>
	<div class="calc-widget">
		<h3 class="calc-widget__title">Расчет переплаты</h3>
		<form action="" class="calc-widget__form">
			<div class="field calc-widget__field">
				<span class="field__label">Сумма</span>
				<span class="range-input">
					<input type="text" readonly tabindex="-1">
					<input type="range" min="100" max="10000" step="50" value="1" />
				</span>
			</div>
			<div class="field calc-widget__field">
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
			<label class="field calc-widget__field">
				<span class="field__label">% ставка</span>
				<input type="number" min="1" max="100" />
			</label>
			<button class="btn btn--high btn--block btn--blue btn--big calc-widget__btn">Рассчитать</button>
			<div class="calc-widget__text">Переплата за весь период: <strong>24 000 руб</strong></div>
		</form>
	</div>
	<a href="#" class="banner"><img src="img/banner.jpg" alt=""></a>
	<div class="news-widget">
		<h3 class="news-widget__title">Новости рынков</h3>
		<div class="news-widget__content">
			<a href="#" class="news-widget__item">
				<span class="news-widget__date">01.11.2019</span>
				<span class="news-widget__excerpt">Недобросовестные сотрудники МФО стали чаще передавать личные данные заемщиков</span>
			</a>
			<a href="#" class="news-widget__item">
				<span class="news-widget__date">01.11.2019</span>
				<span class="news-widget__excerpt">Условия работы микрофинансовых организаций могут сильно измениться</span>
			</a>
			<a href="#" class="news-widget__item">
				<span class="news-widget__date">01.11.2019</span>
				<span class="news-widget__excerpt">Недобросовестные сотрудники МФО стали чаще передавать личные данные заемщиков</span>
			</a>
		</div>
		<a href="#" class="news-widget__all-link">Все новости</a>
	</div>
</aside>