(function(){
	'use strict';

	let cards = document.querySelector('.mixer');

	let cardsArray = ['1.png', '2.jpg'];

	function render() {
		let cardsStr = '';
		for(let card of cardsArray) {
			cardsStr = cardsStr + `<img src="images/${card}">`;
		}
		cards.innerHTML = cardsStr;

		step();
	}

	render();

	function step() {
		let firstImages = document.querySelectorAll('.mixer img');

		for(let firstImage of firstImages) {
			firstImage.addEventListener('click', (event) => {
				setInterval(() => {
					document.querySelector('.mixer img:last-child').classList.add('cardAnimate');
			
					let lastEl = cardsArray[cardsArray.length - 1];
					cardsArray.pop();
					cardsArray.unshift(lastEl);
			
					setTimeout(() => {render()}, 1000);
				}, 2000);
			});
		}
	}




})();

