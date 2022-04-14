'use strict';

class Tabs {
	tabWrapElement = null;
	activeLink = 1;
	contents = [];
	selectorName = null;

	init(selectorElement, object, activeElementIndex) {
		let element = document.querySelector(selectorElement);

		this.selectorName = selectorElement;

		let valid = true;

		if(element != null) {
			this.tabWrapElement = element;
		} else {
			valid = false;
		}

		if(Array.isArray(object) && object.length > 0) {
			this.contents = object;
		} else {
			valid = false;
		}

		this.activeLink = Number(activeElementIndex);

		if (valid) {
			this.render();
		}
	}

	render() {
		this.tabWrapElement.innerHTML = this.renderNavigate() + this.renderBlocks();

		this.switchTabs();
	}

	switchTabs() {
		let navigationItems = document.querySelectorAll(`${this.selectorName} .navigated li`);

		let context = this;
		for(let navigationItem of navigationItems) {
			navigationItem.addEventListener('click', (event) => {
				console.log(event.target.getAttribute('data-index'));

				context.activeLink = event.target.getAttribute('data-index');

				this.render();
			});
		}
	}

	renderNavigate() {
		let strHTML = '<div class="navigated"><ul>';
		let context = this;

		this.contents.forEach(function(item, index) {
			let classActive = '';

			if (index == context.activeLink) {
				classActive = 'active';
			}
			strHTML += `<li data-index="${index}" class="nav-btn ${classActive}">${item.linkName}</li>`;
		});
			
			strHTML += '</ul></div>';

			return strHTML;
		}

	renderBlocks() {
		let strHTML = '<div class="block-wrap">';
		let context = this;

		this.contents.forEach(function(item, index) {
			let classActive = '';

			if (index == context.activeLink) {
				classActive = 'active';
			}

			strHTML += `<div class="block ${classActive}">${item.block}</div>`;
		});

		strHTML += '</div>';

		return strHTML;
	}
}

class TabsContent {
	name = null;
	content = '';

	render() {

	}
}

let firstTabs = new Tabs();

let content = [
	{
		linkName: 'Хиты продаж',
		block: 'Контент хитов продаж'
	},
	{
		linkName: 'Новинки',
		block: 'Контент новинок'
	}
]

firstTabs.init('#tabs1', content, 0);




