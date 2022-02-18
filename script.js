'use strict';

let personeName = 'Human';
let botName     = 'Bot';

let message;
const ANSWER  = ['', 'Я тебе отвечаю!'];

for(let index = 0; index >= 0; index++) {
  message = prompt('Введите сообщение боту...', '');

  if (message) {
    message.trim().toLowerCase();
  }

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
}