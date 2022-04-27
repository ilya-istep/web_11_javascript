let user = {
			login: "",
			password: ""
		}
		let formConfirm = {
			formEl: "",
			loginEl: "",
			passEl: "",
			
			init(formTag){
				this.formEl = document.querySelector(formTag);
				console.log(this.formEl);
				this.loginEl = this.formEl.querySelector(".name");
				this.passEl = this.formEl.querySelector(".pass");
				this.formEl.addEventListener('submit', (evt)=>{
			
					if((this.loginEl.value != 0)&&(this.passEl.value != 0)){
						
						user.login = this.loginEl.value;
						user.password = this.passEl.value;
						console.log(user.login);

					}	
					else{
						evt.preventDefault();
						console.log('error form');
						
					}		
					localStorage.setItem('user', JSON.stringify(user));
					console.log(localStorage.getItem('user'));
					this.formEl.setAttribute("action", "redirect.html");

				})
			}

		}