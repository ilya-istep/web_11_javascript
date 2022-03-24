'use strict';

let listOffers = document.querySelector('.list-offers');
let offersFilter = document.querySelector('.offers-filter');

let offers = [
  {position: 'fornt-end', salary: 100000},
  {position: 'back-end', salary: 200000},
  {position: 'back-end', salary: 250000},
  {position: 'back-end', salary: 290000},
  {position: 'fullstack', salary: 300000},
];

if (offers.length > 0) {
  setTimeout(renderListOffers, 2000);


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
      <input class="form-check-input" type="checkbox" value="" id="${position}">
      <label class="form-check-label" for="${position}">
        ${position}
      </label>
    </div>`
  }
}

function filtersSalary() {
  
}

function renderListOffers() {
  let listOffersStr = '';
  for(let offer of offers) {
    listOffersStr = listOffersStr +`<li><strong>${offer.position}</strong> ${offer.salary}</li>`;
  }
  listOffersStr = '<ul>' + listOffersStr + '</ul>';
  listOffers.innerHTML = listOffersStr;
  renderFilters();
}

// let qustion = prompt('Желаемая должность', 'back-end'),
//     qustion2 = +prompt('Желаемая зарплата', '230000');

// offers.forEach(item => {
//   if (qustion == 'back-end' && qustion2 > 225000 && qustion2 < 270000) {
//     console.log(item.position, item.salary);
//   } else {
//     console.log('error');
//   }
// });