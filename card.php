<? $status = $card['active'] ? " good-card--active" : '';	?>
<div class="good-card<?=$status;?>">
	<div class="good-card__body">
		<div class="good-card__head">
			<h3 class="good-card__title"><?=$card['title'];?></h3>
			<img src="img/catalog/<?=$card['img'];?>" alt="" class="good-card__img">
		</div>
		<div class="good-card__main">
			<table class="good-card__chars">
				<tbody>
					<tr>
						<td>Сроки:</td>
						<td>7 - 21 дней</td>
					</tr>
					<tr>
						<td>Сумма:</td>
						<td>1 000 - 30 000 руб</td>
					</tr>
					<tr>
						<td>Ставка:</td>
						<td>0.76 - 1% в день</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Рейтинг:</td>
						<td>
							<span class="rating">
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
						<td>ОТЗЫВЫ:</td>
						<td><a href="#">7 отзывов</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<?if($card['text']):?>
		<div class="good-card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, tempore sunt consequatur officia sit eaque necessitatibus voluptatibus aut dolores quia nobis voluptas illo doloribus a obcaecati fugiat aperiam! Debitis laboriosam est quasi provident mollitia voluptas expedita ab consequuntur eos voluptatum!</div>
		<?endif;?>
	</div>	
	<div class="good-card__footer">
		<button class="btn btn--block btn--high good-card__btn">Подать заявку</button>
		<a href="#" class="btn btn--block btn--high  btn--gray good-card__btn">Подробнее о компании</a>
		<div class="good-card__licence">Свидетельство ЦБ РФ: <strong>651303042002657</strong></div>
	</div>
</div>