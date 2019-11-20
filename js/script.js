//Слайдер ползунок
function setRangeProgress(){
	var min = this.min || 0,
			max = this.max || 100,
			value = this.value || 0,
			result = value/(max-min) * 100;
			
	this.style.backgroundSize = result+"% 2px";
}
$('[type=range]').each(setRangeProgress);
$('[type=range]').on('input change',setRangeProgress);

//Слайдер ползунок с полем для вывода
$('.range-input [type=range]').on('input change',function(){
	$(this).siblings('input').val(this.value);
})
//меню
$('.menu-btn').click(function(){
	$(this).toggleClass('active');
	$('.header__bottomline').toggleClass('open');
})

//Карта для города
//координаты центра города (в нашем случае - Москва). По идее нужно получать каким-нибудь геокодером.
var cityCenter = [55.753215, 37.622504];

if($('#map').length){
	ymaps.ready(initMap);
}
function initMap(){
	var myMap = new ymaps.Map('map', {
		center: cityCenter,
		zoom: 12,
		controls: []
	}),
	objectManager = new ymaps.ObjectManager();
	
	objectManager.objects.options.set({
		iconLayout: 'default#image',
		iconImageHref: '/img/icons/map-marker.svg',
		iconImageSize: [27, 33],
		iconImageOffset: [-13.5, -33]
	});
	myMap.geoObjects.add(objectManager);
	
	$.ajax({
		url: "/map-geopoints.json"
	}).done(function(data) {
		objectManager.add(data);
	});
}