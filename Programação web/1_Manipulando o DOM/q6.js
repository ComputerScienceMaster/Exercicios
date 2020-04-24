


function isLogged(){
	return window.localStorage.getItem("login")
}

function deslogar(){
	naoLogadoElement = document.getElementById('nao_logado');
	logadoElement = document.getElementById('logado');

	window.localStorage.removeItem("login")
	naoLogadoElement.style.visibility = 'visible'
	logadoElement.style.visibility = 'hidden'
}

function logar() {

	naoLogadoElement = document.getElementById('nao_logado');
	logadoElement = document.getElementById('logado');
	let username = document.getElementById('username').value
	let password = document.getElementById('password').value
	let users = []
	if(window.localStorage.getItem("users")){
		users = JSON.parse(window.localStorage.getItem("users"))
	}
	for(let i = 0; i < users.length; i++) {
		if(users[i].username == username && users[i].password ==password){
			window.localStorage.setItem("login", document.getElementById('username').value)
			naoLogadoElement.style.visibility = 'hidden'
			logadoElement.style.visibility = 'visible'
			break;
		}
	}
}

function criarUsuarioNovo() {
	let username = document.getElementById('new_user').value
	let password = document.getElementById('new_password').value;
	let messages = document.getElementById('messages');
	let users = []
	if(window.localStorage.getItem("users")){
		users = JSON.parse(window.localStorage.getItem("users"))
	}

	users.push({username: username, password: password})
	window.localStorage.setItem("users", JSON.stringify(users));
	messages.innerHTML = "<div>Usuario criado!</div>";
}

