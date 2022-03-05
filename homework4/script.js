'use strict';
console.log('HOMEWORK4 HOMEWORK4 HOMEWORK4 HOMEWORK4');

// HOMEWORK3 HOMEWORK3 HOMEWORK3 HOMEWORK4
// HOMEWORK3 HOMEWORK3 HOMEWORK3 HOMEWORK4
// HOMEWORK3 HOMEWORK3 HOMEWORK3 HOMEWORK4
// HOMEWORK3 HOMEWORK3 HOMEWORK3 HOMEWORK4

const button = document.querySelector('.button');

let animationNameQuestion = prompt('Введите анимацию "backInDown or bounceIn"', 'bounceIn');

function addAnimation() {
  if (animationNameQuestion === 'backInDown' ||
      animationNameQuestion === 'bounceIn') {
    button.classList.add(animationNameQuestion);
  }
}

button.addEventListener('click', addAnimation);





// HOMEWORK3 HOMEWORK3 HOMEWORK3 HOMEWORK4
// HOMEWORK3 HOMEWORK3 HOMEWORK3 HOMEWORK4
// HOMEWORK3 HOMEWORK3 HOMEWORK3 HOMEWORK4
// HOMEWORK3 HOMEWORK3 HOMEWORK3 HOMEWORK4