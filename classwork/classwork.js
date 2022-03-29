'use strict';

(function(){

  let listOffers = document.querySelector('.offer__items');
  let offersFilter = document.querySelector('.offers-filter');

  let activePage = 1;

  const COUNT_OFFERS_TO_PAGE = 3;

  let offers = [
    {
      position: 'Требуется front-end разработчик', 
      salary: 100000,
      city: 'Нижний Новгород',
      logo: 'mac.webp',
      skills: '',
      content: ''
    },
    {
      position: 'Требуется back-end разработчик', 
      salary: 500000,
      city: 'Москва',
      logo: 'burger.webp',
      skills: '',
      content: ''
    },
    {
      position: 'Требуется fullstack разработчик', 
      salary: 1000000,
      city: 'Санкт-Питербург',
      logo: 'mac.webp',
      skills: '',
      content: ''
    },
    {
      position: 'Требуется fullstack разработчик', 
      salary: 1000000,
      city: 'Санкт-Питербург',
      logo: 'mac.webp',
      skills: '',
      content: ''
    },
    {
      position: 'Требуется fullstack разработчик', 
      salary: 1000000,
      city: 'Санкт-Питербург',
      logo: 'mac.webp',
      skills: '',
      content: ''
    },
    {
      position: 'Требуется fullstack разработчик', 
      salary: 1000000,
      city: 'Санкт-Питербург',
      logo: 'mac.webp',
      skills: '',
      content: ''
    },
    {
      position: 'Требуется fullstack разработчик', 
      salary: 1000000,
      city: 'Санкт-Питербург',
      logo: 'mac.webp',
      skills: '',
      content: ''
    },
  ];

  if (offers.length > 0) {
    setTimeout(() => {
      renderListOffers();
      listOffers.parentElement.innerHTML += renderPaginations();
      switchPagination();
      renderFilters();
    }, 100);

  } else {
    listOffers.innerHTML = 'Нет вакансий';
  }



  function renderFilters() {
    filtersPositions();
    filtersSalary();
  }

  function filtersPositions() {

    let filterPositions = document.querySelector('.filter-positions');

    let positions = new Set();

    for(let offer of offers) {
      positions.add(offer.position);
    }

    for (let position of positions) {
      filterPositions.innerHTML = filterPositions.innerHTML + `
      <div class="form-check">
        <input type="checkbox" value="" id="${position}" class="position_field form-check-input">
        <label class="form-check-label" for="${position}">
          ${position}
        </label>
      </div>`
    }

    let positionsField = document.querySelectorAll('.position_field');

    for(let positionField of positionsField) {
      positionField.addEventListener('input', (event) => {
        console.log(event.target);
      });
    }
  }

  function filtersSalary() {
    
  }

  function renderPaginations() {

    let countPage = Math.ceil(offers.length / COUNT_OFFERS_TO_PAGE);
    let strNumbers = '';

    for(let i = 1; i <= countPage; i++) {
      strNumbers += `<li class="page-item"><a class="page-link" href="#">${i}</a></li>`;
    }

    return `<nav aria-label="Page navigation example" class="pagigation">
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

  function switchPagination() {
    let pagigationLinks = document.querySelectorAll('.pagigation .page-link');

    for(let link of pagigationLinks) {
      link.addEventListener('click', (event) => {
        event.preventDefault();
        activePage = +event.target.innerHTML;
        renderListOffers();
      });
    }
  }

  function renderListOffers() {
    let listOffersStr = '';
    console.log(activePage);

    offers.forEach((offer, index) => {
      // activePage; - номер страницы выбранный
      // COUNT_OFFERS_TO_PAGE; - кол-во записей на странице
      // offers.length; - всего записей

      if (index + 1 <= COUNT_OFFERS_TO_PAGE) {
        listOffersStr += `<div class="offer__item">
                            <img src="images/${offer.logo}" alt="logo">
                            <h3 class="offer__title">${offer.position}</h3>
                            <p class="offer__city">${offer.city}</p>
                            <div class="offer__price">${offer.salary}руб</div>
                          </div>`;
      }
    });
    
    listOffers.innerHTML = listOffersStr;

    switchPagination();
  }


})();

