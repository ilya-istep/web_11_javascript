(function(){
	'use strict';

	class Users {
		name = '';
		avatar = '';
		timeVizited = '';

		sendMessage() {

		}
	}

	class Messages {
		content = '';
		timeCreate = '';
		author = '';

		renderMessages() {
			this.author = new Users();
		}
	}

	class Dialog {
		messages = [];
		user1 = '';
		user2 = '';

		renderDialog() {
			this.user1 = new Users();
			this.user1 = new Users();
		}
	}

	class Chat {
		users = null;

		renderChat() {
			let dialog = new Dialog();

			dialog.renderDialog();
		}
	}

	let chat = new Chat();
	chat.renderChat();











	// class Animal {
	// 	paws = 4;

	// }

	// class Cat extends Animal {

	// }

	// class Dog extends Animal {

	// }


	// let cat1 = new Cat();

	// console.log(cat1.paws);



})();	

