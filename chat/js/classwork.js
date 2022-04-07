(function(){
	'use strict';

	let messages = [];



	let sendBtn = document.querySelector('.send-btn');

	function render(message) {
		let messagesElement = document.querySelector('.messages');

		messagesElement.innerHTML+= `
		<li class="clearfix message">
			<div class="message-data text-right">
				<span class="message-data-time">${message.date} ${message.author}</span>
				<img src="images/${message.avatar}" alt="avatar">
			</div>
			<div class="message other-message float-right">${message.content}</div>
		</li>`;
	}

	let sendOn = (event) => {
		if (event.pointerType == 'mouse' || event.keyCode == 13) {
			let contentElement = document.querySelector('.field-content');
			let content = contentElement.value.trim();
	
			if (content.length > 0) {
				let date = new Date();
				let dateMessage = `${date.getHours()}:${date.getMinutes()}`;

				let message = {
					author: 'You',
					date: dateMessage,
					avatar: 'avatar2.png',
					content: content,
				};
	
				render(message);
				contentElement.value = '';
			}
		}
	}

	sendBtn.addEventListener('click', sendOn);

	document.addEventListener('keypress', sendOn);






















})();

