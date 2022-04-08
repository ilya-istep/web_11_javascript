(function(){
	'use strict';

	const COUNT_OFFERS_TO_PAGE = 3;
	let activePage = 1;

	let offers = [
		{
			position: "Требуется front-end разработчик",
			money: 100000,
			city: "Нижний Новгород",
			logo_company: "logo1.webp",
			skills: "",
			content: ""
		},
		{
			position: "Требуется back-end разработчик",
			money: 100000,
			city: "Нижний Новгород",
			logo_company: "logo2.webp",
			skills: "",
			content: ""
		},
		{
			position: "Верстальщик / front-end разработчик",
			money: 100000,
			city: "Нижний Новгород",
			logo_company: "logo2.webp",
			skills: "",
			content: ""
		},
		{
			position: "Верстальщик",
			money: 100000,
			city: "Нижний Новгород",
			logo_company: "logo1.webp",
			skills: "",
			content: ""
		},
		{
			position: "Требуется back-end разработчик",
			money: 100000,
			city: "Нижний Новгород",
			logo_company: "logo2.webp",
			skills: "",
			content: ""
		},
		{
			position: "Требуется back-end разработчик",
			money: 100000,
			city: "Нижний Новгород",
			logo_company: "logo2.webp",
			skills: "",
			content: ""
		}
		,
		{
			position: "Требуется back-end разработчик",
			money: 100000,
			city: "Нижний Новгород",
			logo_company: "logo2.webp",
			skills: "",
			content: ""
		}
		,
		{
			position: "Требуется back-end разработчик",
			money: 100000,
			city: "Нижний Новгород",
			logo_company: "logo2.webp",
			skills: "",
			content: ""
		}
	];

	let listOffers = document.querySelector(".list_offers");
	let offersFilters = document.querySelector(".offers_filter");

	if(offers.length > 0){

		setTimeout(()=>{
			renderFilters();
			renderListOffers();
			listOffers.parentElement.innerHTML += renderPaginations();	
			switchPagination();
		}, 100);
	}	
	else{
		listOffers.innerHTML = "Нет вакансий";
	}

	function renderFilters(){
		filtersPositions();
		filtersMoneys();
	}

	function filtersPositions(){

		let filtersPositions = offersFilters.querySelector(".filters_positions");

		let positions = new Set();

		for(let offer of offers){
			positions.add(offer.position);
		}



		for (let position of positions) {

			filtersPositions.innerHTML = filtersPositions.innerHTML + `
				<div class="form-check">
          <input class="form-check-input position_field" type="checkbox" value="" id="${position}">
          <label class="form-check-label" for="${position}">
            ${position}
          </label>
				</div>
			`;
		}

		let positionFields = document.querySelectorAll(".position_field");

		for(let positionField of positionFields){

			positionField.addEventListener('input', (evt)=>{
				console.log(1);
			})
		}

	}

	function filtersMoneys(){
		
	}

	function renderPaginations(){

		offers.length;
		COUNT_OFFERS_TO_PAGE

		let countPage = Math.ceil(offers.length / COUNT_OFFERS_TO_PAGE);

		let strNumbers = "";
		for(let i = 1; i <= countPage; i++){
			strNumbers += `<li class="page-item"><a class="page-link" href="#">${i}</a></li>`;
		}


		return `<nav aria-label="Page navigation example" class="pagination">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>

            ${strNumbers}

            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
				</nav>`;
	}

	function switchPagination(){
		let paginationLinks = document.querySelectorAll(".pagination .page-link");

		for(let link of paginationLinks){
			link.addEventListener('click', (evt)=>{
				evt.preventDefault();
				activePage = Number(evt.target.innerHTML);
				renderListOffers();
			})
		}
	}

	function renderListOffers(){
		let listOffersStr = "";

		let start_index;
		if(activePage == 1){
			start_index = 0;
		}
		else{
			start_index = (activePage - 1) * COUNT_OFFERS_TO_PAGE;
		}


		offers.forEach((offer, index)=>{

			// COUNT_OFFERS_TO_PAGE - количество записей на странице
			// activePage - выбранный номер страницы
			// offers.length - всего записей

			

			// поправить это условие
			if( (index >= start_index) && (index < (start_index + COUNT_OFFERS_TO_PAGE)) ){
				
				listOffersStr += `<div class="item_offer">
										<img src="images/${offer.logo_company}" alt="">
										<div class="offer_info">
											<h3>${offer.position}</h3>
											<p class="city">${offer.city}</p>
											<strong class="money">${offer.money} руб</strong>
										</div>
									</div>`;

			}
		});

		document.querySelector(".list_offers").innerHTML = listOffersStr;
	}
})();	

