(function(){
	'use strict';



	function init(selectorID) {
		let carouselElement;
		let prevBtn;
		let nextBtn;
		let listOffersWrap;

		carouselElement = document.querySelector(selectorID);

		if(carouselElement === null) {
			return 0;
		}

		let carousel = {
			prevBtn: document.querySelector('.prev'),
			nextBtn: document.querySelector('.next'),
			listOffersWrap: document.querySelector('.list_offers'),
			offset: 0,
			heightItem: 130,
			countItems: function() {
				return this.listOffersWrap.children.length;
			},
			heightAllOffers: function() {
				return this.countItems * this.heightItem;
			},
			offsetNext: function() {
				let app = this;
				this.nextBtn.addEventListener('click', function() {
					if(app.offset > -(heightAllOffers - 390)) {
						app.offset = app.offset - app.heightItem();
						console.log(app.heightAllOffers);
						app.listOffersWrap.style.marginTop = app.offset + 'px';
					}
				});
			},
			offsetPrev: function() {
				let app = this;
				this.prevBtn.addEventListener('click', () => {
					if(app.offset != 0) {
						app.offset = app.offset + app.heightItem();
						console.log(app.heightAllOffers);
						app.listOffersWrap.style.marginTop = app.offset + 'px';
					}
				});
			}
		}
	}


	
	init('#carousel1');
})();

