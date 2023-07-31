// slides.js

document.addEventListener('DOMContentLoaded', function () {
	var splide = new Splide('.splide', {
		type: 'loop',
		autoplay: true,
		interval: 3000, 
		pagination: false,
	})

	var bar = document.querySelector('.my-slider-progress-bar')

	splide.on('mounted move', function () {
		var end = splide.Components.Controller.getEnd() + 1
		var rate = Math.min((splide.index + 1) / end, 1)
		bar.style.width = String(100 * rate) + '%'
	})

	splide.mount()
})