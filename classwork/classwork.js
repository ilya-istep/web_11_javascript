'use strict';


/*
for(let btn of tabsBtns) {
  btn.addEventListener('click', function(event) {
    let elementParentActive = document.querySelector('.tabs-nav li.active');
    elementParentActive.classList.remove('active');

    let parentOfbtn = event.target.parentElement;
    parentOfbtn.classList.add('active');

    let elementBlockActive = document.querySelector('.tabs-content .active');
    elementBlockActive.classList.remove('active');

    let hashBtn = '#' + parentOfbtn.dataset.block;

    let Elementblock = document.querySelector(hashBtn);
    Elementblock.classList.add('active');
  });
}
*/


let tabs = {
  tabsParent: '#tabs1',
  objectTab: null,
  switched: function() {
    let context = this;

    this.objectTab.addEventListener('click', (event) => {
      if (event.target.closest('.btn')) {
        let parentElement = event.target.parentElement;

        if (parentElement.tagName != 'LI') {
          context.exeption(null);
          return 0;
        }

        let parentElementActive = context.objectTab.querySelector('.tabs-nav li.active');

        context.removeClass(parentElementActive);
        context.addClass(parentElement);

        let valueAttribute = parentElement.dataset.block;

        if (valueAttribute === null) {
          context.exeption(null);
          return 0;
        }
        
        let blockElementActive = context.objectTab.querySelector('#' + valueAttribute);

        if (blockElementActive === null) {
          context.exeption(null);
          return 0;
        } else {
          let blockActive = context.objectTab.querySelector('.tabs-content div.active');

          context.removeClass(blockActive);
          context.addClass(blockElementActive);
        }
      }
    });
  },
  addClass: (element) => {
    element.classList.add('active');
  },
  removeClass: (element) => {
    element.classList.remove('active');
  },
  exeption: (object) => {
    if(object === null) {
      console.log('error');
      return false;
    } else {
      return true;
    }
  },
  initialization: function() {
    console.log('Запускаем табы');

    this.objectTab = document.querySelector(this.tabsParent);

    if(this.exeption(this.objectTab) == false) {
      return 0;
    }

    this.switched();
  },
}

tabs.initialization();

let tabs2 = tabs;
tabs2.tabsParent = '#tabs2';

tabs2.initialization();