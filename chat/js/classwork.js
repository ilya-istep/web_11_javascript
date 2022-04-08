(function(){
	'use strict';

	let messages = [];

	let sendBtn = document.querySelector('.send-btn');
	let textInput = document.querySelector('.input-message');
	let chatWindow = document.querySelector('.chat-history > ul');

	function addZero(num) {
		if(num >= 10) {
			return num;
		} else if(num < 10) {
			return `0${num}`;
		}
	}

	function scrollingBottom(element) {
		element.scrollTop = element.scrollTop + 50000;
		element.scrollTo(0, element.scrollTop);
	}

	let sendMessage = (event) => {
		let content = textInput.value;
		let dateMessage = new Date();

		let message = {
			name: 'You',
			date: `${addZero(dateMessage.getHours())}:${addZero(dateMessage.getMinutes())}`,
			avatar: 'avatar3.png',
			content: content
		};
	
		if (content.length > 0 && (event.pointerType == 'mouse' || event.keyCode == 13)) {
			chatWindow.innerHTML += `
			<li class="clearfix">
				<div class="message-data">
				<img src="images/${message.avatar}" alt="${message.avatar}">
						<span class="message-data-time">${message.name} ${message.date}</span>
				</div>
				<div class="message my-message">${content}</div>
			</li>
			`;
			textInput.value = '';
			
			scrollingBottom(chatWindow);
		}
	}
	
	
	sendBtn.addEventListener('click', sendMessage);
	document.addEventListener('keypress', sendMessage);



















})();

