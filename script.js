'use strict';

/*
HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK
HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK
HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK
HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK

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

HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK
HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK
HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK
HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK
} */


let colors = [];
let colorsIndex = 0;

while(true){
  let color = prompt();
  let i = 0;
  let flag = false;

  while(i < colors.length){
    if(colors[i] == color){
      flag = true;
      break;
    }
    i = i + 1;
  }

  if(flag == false){
    colors[colorsIndex] = color;
  }

  if(color == 0 || color == null){
    break;
  }

  colorsIndex = colorsIndex + 1;
  console.log(colors);
}

/*
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