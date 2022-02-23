'use strict';

(function (){
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
      return  90;
    } else if (question < 90 && question > 0){
      return 1;
    } else if (question > 90 && question < 180) {
      return 179;
    } else if (question >= 180) {
      return 180;
    } else if (question <= 0) {
      return 0;
    }
  }

  let triangleDegreeAnswer = triangleDegreeQuestion();
console.log(triangleDegreeAnswer);
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
  } else if (triangleDegreeAnswer > 90 && triangleDegreeAnswer < 180){
    console.log('Тупоугольный треугольник');
  } else if (triangleDegreeAnswer < 90 && triangleDegreeAnswer > 0){
    console.log('Остроугольный треугольник');
  } else if (triangleDegreeAnswer <= 0 || triangleDegreeAnswer >= 180) {
    console.log('Такого треугольника не существует!');
  }
})();