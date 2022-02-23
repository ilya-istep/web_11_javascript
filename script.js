'use strict';

/*
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 1
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 1
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 1
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 1

let personeName = 'Human';
let botName     = 'Bot';

let message;
const ANSWER  = ['', 'Я тебе отвечаю!'];

for(let index = 0; index >= 0; index++) {
  message = prompt('Введите сообщение боту...', '');

  if (message && Math.random() < 0.5) {
    console.log(`${personeName}: ${message}`);
    console.log(`${botName}: Я тебе ответил!`);

  } else if (message && Math.random() >= 0.5) {
    console.log(`${personeName}: ${message}`);
    console.log(`${botName}: `);

  } else if (message == null || !message) {
    console.log(`${botName}: Пока!`);
    break;

  }

// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 1
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 1
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 1
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 1
} */

// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2

let triangleDegreeQuestion = () => {
  let question = prompt('Какой угол у катетов?');
  if (question == 'девяносто' || 
  question == 'девяносто градусов' || 
  question == '90' || 
  question == '90 градусов' || 
  question == '90℃' || 
  question == '90 ℃' || 
  question == '90°' || 
  question == '90 °') {
    return 90;
  }
}

if (triangleDegreeQuestion() == 90) {
  let triangleSides = [];

  let calcTrianglePerimeter = (a, b, c) => {
    let halfPerimetr = (a + b + c) / 2;
    let perimetr     = Math.sqrt(halfPerimetr * (halfPerimetr - a) * (halfPerimetr - b) * (halfPerimetr - c)).toFixed(3);

    if (isNaN(perimetr)) {
      return 'Такого треугольника не существует!';
    } else {
      return perimetr;
    }
  };


  for (let i = 0; i < 3; i++) {
    let sides = ['AB', 'BC', 'AC'];

    triangleSides[i] = prompt(`Чему равна сторона ${sides[i]}?`);
    
    console.log(triangleSides);

    if (triangleSides[i] == '' || triangleSides[i] == null) {
      break;
    }
  }

  console.log(calcTrianglePerimeter(+triangleSides[0], +triangleSides[1], +triangleSides[2]));
} else {
  console.log('Я забыл ТЗ...');
}




// console.log(triangleSides);






// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2









// CLASSWORK CLASSWORK CLASSWORK  CLASSWORK 
// CLASSWORK CLASSWORK CLASSWORK  CLASSWORK 
// CLASSWORK CLASSWORK CLASSWORK  CLASSWORK 
// CLASSWORK CLASSWORK CLASSWORK  CLASSWORK 

// (function() {
//   let colors = ['#f00', 'red', 'green', 'yellow', 'Red'];
//   let counterOfRed = 0;
  
  
//   let checkRed = (array, counter) => {
  
//     for (let index = 0; index < array.length; index += 1) {
//       array[index] = array[index].toLowerCase();
    
//       if (array[index] == 'red' || array[index] == '#f00') {
//         counter += 1;
//       }
  
//     }
  
//     return counter;
//   };
  
//   console.log(`Красный цвет в массиве встречается ${checkRed(colors, counterOfRed)} раз(а)!`);
// })();


// CLASSWORK CLASSWORK CLASSWORK  CLASSWORK 
// CLASSWORK CLASSWORK CLASSWORK  CLASSWORK 
// CLASSWORK CLASSWORK CLASSWORK  CLASSWORK 
// CLASSWORK CLASSWORK CLASSWORK  CLASSWORK 
