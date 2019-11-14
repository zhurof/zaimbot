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