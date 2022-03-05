'use strict';

console.log('HOMEWORK2 HOMEWORK2 HOMEWORK2 HOMEWORK2');

// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2



let triangleDegree = [];

for (let i = 0; i < 3; i++) {
  triangleDegree[i] = +prompt(`Чему равны стороны треугольника?`);
}

let calcAngle = (a, b, c) => {
  let cosA = radianToDegree(((a ** 2) + (c ** 2) - (b ** 2)) / (2 * a * c));
  let cosB = radianToDegree(((a ** 2) + (b ** 2) - (c ** 2)) / (2 * a * b));
  let cosC = radianToDegree(((b ** 2) + (c ** 2) - (a ** 2)) / (2 * c * b));

  // console.log(`Угол A равен ${cosA}`);
  // console.log(`Угол B равен ${cosB}`);
  // console.log(`Угол С равен ${cosC}`);

  if (cosA == cosB 
  || cosA == cosC 
  || cosB == cosC) {
    return 90;
  }

  function radianToDegree(radian) {
    return radian = (radian * 180) / Math.PI;
  }
}

let calcTrianglePerimeter = (a, b, c) => {
  let halfPerimetr = (a + b + c) / 2;
  let perimetr     = Math.sqrt(halfPerimetr * (halfPerimetr - a) * (halfPerimetr - b) * (halfPerimetr - c)).toFixed(1);

  if (isNaN(perimetr) || perimetr == 0) {
    return 'Такого треугольника не существует!';
  } else {
    return `Sп.т. = ${perimetr}кв.см`;
  }
};

if (calcAngle(+triangleDegree[0], +triangleDegree[1], +triangleDegree[2]) == 90) {
  let triangleSides = [];

  for (let i = 0; i < 3; i++) {
    let sides = ['AB', 'BC', 'AC'];

    triangleSides[i] = prompt(`Чему равна сторона прямоугольного треугольника ${sides[i]}?`);

    if (triangleSides[i] == '' || triangleSides[i] == null) {
      break;
    }
  }

  console.log(calcTrianglePerimeter(+triangleSides[0], +triangleSides[1], +triangleSides[2]));
} else {
  console.log('Это не прямоугольный треугольник');
}

// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2
// HOMEWORK HOMEWORK HOMEWORK HOMEWORK HOMEWORK 2