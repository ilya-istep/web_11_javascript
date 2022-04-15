(function(){
	'use strict';

	let messages = [];

	let userData = {
		name: 'Олег',
	};

	let chatMessage = document.querySelector('.chat-message');
	let sendBtn = chatMessage.querySelector('.send-btn');
	let textInput = chatMessage.querySelector('.input-message');
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

	let isTyping = (event) => {
		let isTyping = document.createElement('p');
		
		chatMessage.addEventListener('keypress', (event) =>{
			isTyping.classList.add('isTyping');
			isTyping.textContent = `${userData.name} Печатает...`;
			chatMessage.append(isTyping);

			if (event.keyCode == 13) {
				setTimeout(() => {
					isTyping.remove();
				}, 500);
			}
		}, true);

		
	}

	let sendMessage = (event) => {
		let content = textInput.value;
		let dateMessage = new Date();


		let message = {
			name: userData.name,
			date: `${addZero(dateMessage.getHours())}:${addZero(dateMessage.getMinutes())}`,
			avatar: 'avatar3.png',
			content: content
		};
	
		if (content.length > 0 && (event.pointerType == 'mouse' || event.keyCode == 13)) {
			chatWindow.insertAdjacentHTML('beforeend',`
			<li class="clearfix">
				<div class="message-data">
				<img src="images/${message.avatar}" alt="${message.avatar}">
						<span class="message-data-time">${message.name} ${message.date}</span>
				</div>
				<div class="message my-message">${content}</div>
			</li>
			`);
			textInput.value = '';
			
			scrollingBottom(chatWindow);
		}
	}
	
	sendBtn.addEventListener('click', sendMessage);
	document.addEventListener('keypress', sendMessage);
	textInput.addEventListener('focus', isTyping);


















})();

