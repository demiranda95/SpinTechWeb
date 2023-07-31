// Counter.js

function animateValue(obj, start, end, duration) {
	let startTimestamp = null
	const step = (timestamp) => {
		if (!startTimestamp) startTimestamp = timestamp
		const progress = Math.min((timestamp - startTimestamp) / duration, 1)
		obj.innerHTML = Math.floor(progress * (end - start) + start)
		if (progress < 1) {
			window.requestAnimationFrame(step)
		}
	}
	window.requestAnimationFrame(step)
}

const counter1 = document.getElementById('c-01')
const counter2 = document.getElementById('c-02')
const counter3 = document.getElementById('c-03')
const counter4 = document.getElementById('c-04')

animateValue(counter1, 0, counter1.textContent, 3000)
animateValue(counter2, 0, counter2.textContent, 3000)
animateValue(counter3, 0, counter3.textContent, 3000)
animateValue(counter4, 0, counter4.textContent, 3000)
