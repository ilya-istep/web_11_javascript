'use strict';

console.log('HOMEWORK2 HOMEWORK2 HOMEWORK2 HOMEWORK2');

// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2

(function (){
  let triangleDegreeAnswer = triangleDegreeQuestion();

  function triangleDegreeQuestion () {
    let question = prompt('Какой угол у катетов?');

    if (question != '' && question != null) {
      question = question.toLowerCase();
    }

    if (question == 'девяносто' || 
    question == 'девяносто градусов' || 
    question == '90' || 
    question == '90 градусов' || 
    question == '90℃' || 
    question == '90 ℃' || 
    question == '90°' || 
    question == '90 °') {
      return 90;
    } else {
      return '';
    }
  }

  if (triangleDegreeAnswer == 90) {
    let triangleSides = [];
  
    let calcTrianglePerimeter = (a, b, c) => {
      let halfPerimetr = (a + b + c) / 2;
      let perimetr     = Math.sqrt(halfPerimetr * (halfPerimetr - a) * (halfPerimetr - b) * (halfPerimetr - c)).toFixed(1);
  
      if (isNaN(perimetr)) {
        return 'Такого треугольника не существует!';
      } else {
        return `Sп.т. = ${perimetr}кв.см`;
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
    console.log('Это не прямоугольный треугольник');
  }
})();

// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2