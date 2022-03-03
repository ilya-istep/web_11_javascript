let btn = document.querySelector('.btn');

let animation = (event) => {

  if (btn.classList.contains('btn-animation')) {
    btn.classList.toggle('btn-animation-state');
  }

  btn.classList.add('btn-animation');
}

btn.addEventListener('click', animation);

btn.addEventListener('dblclick', () => {
  btn.classList.remove('btn-animation');
});


