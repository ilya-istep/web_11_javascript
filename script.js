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





// let massiveValues = [];
// let massiveWords = ['первое', 'второе'];

// for (let i = 0; i < 2; i += 1) {
//   massiveValues[i] = prompt(`Введите ${massiveWords[i]} число`);
// }

// for (let i = 0; massiveValues.length; i += 1) {
//   returnNumber(massiveValues[i]);
// }


// function returnNumber(num) {
//   num = num.trim();

//   if (num.length != 0) {
//     console.log(Number(num));
//   } else {
//     console.log('Error');
//   }
// }




// let c1 = +prompt('Введите первое число');
// let c2 = +prompt('Введите второе число');
// let o  = prompt('Введите операцию');

// switch (o) {
//   case '+': console.log(c1 + c2); break;
//   case '-': console.log(c1 - c2); break;
//   case '/': console.log(validatorD(c1, c2)); break;
//   case '*': console.log(c1 * c2); break;
//   default: console.log('error'); break;
// }

// function validatorD(a, b) {
//   if (b == 0) {
//     return 'На ноль делить нельзя';
//   } else {
//     return Math.floor(a / b);
//   }
// }





// (function() {
//   let colors = ['#f00', 'red', 'green', 'yellow', 'Red'];
//   let counter = 0;
  
  
//   let countOfRed = (array, count) => {
//     for (count = 0; count < colors.length; count += 1) {
//       array[count] = array[count].toLowerCase();
    
//       if (array[count] == 'red' || array[count] == '#f00') {
//         counter++;
//       }
    
//     }
    
//   };
  
//   countOfRed(colors, counter);
  
//   console.log(`Красный встречается ${counter} раз!`);
// })();


let a = prompt('Введите катет треугольника');
let b = prompt('Введите второй катет треугольника');


function triangle(a, b) {
  let s = (a * b) / 2;
  return s;
}

console.log(triangle(a, b));














/* МАССИВЫ
1) Создаем переменные:
  Пустой массив цветов.
  Индекс массива цветов (colorsIndex).

2) Создаем бесконечный цикл.

3) Создаем переменные в массиве:
  Переменная, в которую помещаем цвет, который ввел пользователь.
  Переменная итератор массива (i).
  Переменная flag, которая отвечает за совпадения и присваивает себе значение false.

4) Создаем условие, при котором цикл будет завершаться:
  Если пользователь ввел пустую строку, ноль или null, то мы завершаем цикл.

5) Создаем новый цикл в нашем цикле с условием:
  Пока переменная итератор массива (i) меньше, чем длина массива, мы увеличиваем эту переменную на один.
  5.1) В этом цикле добавляем условие: 
    Если значение нашего массива colors[i] равна значению, введеному пользователем, то в переменную совпадения (flag) помещаем значение true и останавливаем этот цикл.

6) В глобальный цикл добавляем еще одно условие:
    Если проверка нашего совпадения (flag) равна false, то мы записываем значение, что ввел пользователь в массив с цветами в индекс массива цветов (colorsIndex)
*/