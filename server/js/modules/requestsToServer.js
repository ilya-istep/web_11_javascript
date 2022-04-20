export default class RequestToServer {
  constructor(parent) {
    this.parent = document.querySelector(parent);
  }

  request = new XMLHttpRequest();
  parameters;


  forArticles() {
    this.request.open('GET', 'https://liblessons.ru/ajax/data2.php');

    this.request.addEventListener('load', () => {
      if (this.request.readyState == 4) {
        this.parameters = JSON.parse(this.request.response);
    
        this.parameters.forEach((item) => {
          this.parent.insertAdjacentHTML('beforeend',
            `
              <li class="article">
                <div class="article__title">${item.title}</div>
                <div class="article__content">${item.content}</div>
              </li>
            `
          );
        });
      }
    });
    this.request.send();
  }
  
  forTest() {
  this.request.open('GET', 'https://liblessons.ru/ajax/data1.php');

  this.request.addEventListener('load', () => {
    this.parameters = JSON.parse(this.request.response);

    this.parent.innerHTML = '';
    this.parameters.forEach((item) => {
      this.parent.insertAdjacentHTML('beforeend',
        `
          <p>${item}</p>
        `
      );
    });
  });
  this.request.send();
  }
}