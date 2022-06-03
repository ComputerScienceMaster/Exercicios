window.onload = function onloadEx6() {
  let ex6 = document.getElementById("ex6");
  ex6.innerHTML =
    ' <h1>login</h1> 	<div id="nao_logado"> <input id="username" type="text"> ' +
    '<input id="password" type="password"> <button onclick="logar()">Login</button>' +
    '<br/><br/><div>Novo Usuario</div> <input id="new_user" type="text"> <input id="new_password" type="password">' +
    '<button onclick="criarUsuarioNovo()">Criar</button>	</div> <div id="messages"></div>	<div id="logado" style="visibility:hidden"> <div>Logado</div>' +
    '<button onclick="deslogar()">Deslogar</button> </div> <script src="q6.js"> 	</script> </body> </html>';
};

function isLogged() {
  return window.localStorage.getItem("login");
}

function deslogar() {
  naoLogadoElement = document.getElementById("nao_logado");
  logadoElement = document.getElementById("logado");

  window.localStorage.removeItem("login");
  naoLogadoElement.style.visibility = "visible";
  logadoElement.style.visibility = "hidden";
}

function logar() {
  naoLogadoElement = document.getElementById("nao_logado");
  logadoElement = document.getElementById("logado");
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let users = [];
  if (window.localStorage.getItem("users")) {
    users = JSON.parse(window.localStorage.getItem("users"));
  }
  for (let i = 0; i < users.length; i++) {
    if (users[i].username == username && users[i].password == password) {
      window.localStorage.setItem(
        "login",
        document.getElementById("username").value
      );
      naoLogadoElement.style.visibility = "hidden";
      logadoElement.style.visibility = "visible";
      break;
    }
  }
}

function criarUsuarioNovo() {
  let username = document.getElementById("new_user").value;
  let password = document.getElementById("new_password").value;
  let messages = document.getElementById("messages");
  let users = [];
  if (window.localStorage.getItem("users")) {
    users = JSON.parse(window.localStorage.getItem("users"));
  }

  users.push({ username: username, password: password });
  window.localStorage.setItem("users", JSON.stringify(users));
  messages.innerHTML = "<div>Usuario criado!</div>";
}
