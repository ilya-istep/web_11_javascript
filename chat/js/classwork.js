(function(){
	'use strict';

	let messages = [];

	let statusWriteElement = document.querySelector('.status-write');
	let sendBtn = document.querySelector('.send-btn');
	let textInput = document.querySelector('.input-message');
	let chatWindow = document.querySelector('.chat-history > ul');

	let intervalID = null;
	let flag = false;

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

	function dynamicWrite() {
		let step = 1;
	
		let intervalID = setInterval(() => {
			if (step < 4) {
				statusWriteElement.innerHTML += '.';
				step++;

			} else {
				statusWriteElement.innerHTML = 'Печатает';
				step = 1;

			}
		}, 300);

		return intervalID;
	}

	let sendMessage = (event) => {
		let content = textInput.value;
		let dateMessage = new Date();


		let message = {
			name: 'Mike Tyson',
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

			statusWriteElement.innerHTML = '';
			clearInterval(intervalID);
		}
	}

	textInput.addEventListener('input', (event) => {

		if (!flag) {
			statusWriteElement.innerHTML = 'Печатает';
			intervalID = dynamicWrite();

			setTimeout(() => {
				statusWriteElement.innerHTML = '';
				flag = false;

				clearInterval(intervalID);
			}, 1500);
			
			flag = true;
		}

	});

	textInput.addEventListener('blur', (event) => {

		if (flag) {

			statusWriteElement.innerHTML = '';
			flag = false;
		}
	});
	
	sendBtn.addEventListener('click', sendMessage);
	document.addEventListener('keypress', sendMessage);
	// textInput.addEventListener('focus', isTyping);



})();

