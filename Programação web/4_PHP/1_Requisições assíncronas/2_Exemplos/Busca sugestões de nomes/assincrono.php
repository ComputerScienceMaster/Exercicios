<html>
<head>
    <script>
        //define a função que será chamada a cada vez que o usuário digitar uma letra no text box
        function showHint(str) {
            // se o usuário não digitar nada - nada aparece na sugestão
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                // caso o usuário digite algo - é feita uma requisição assíncrona via javascript
                // Instancia o objeto que fará a requisição
                var xmlhttp = new XMLHttpRequest();
                // adiciona um listener e adiciona ao listenet uma função anônima
                xmlhttp.onreadystatechange = function() {
                    // caso a requisição tenha sucesso...
                    if (this.readyState == 4 && this.status == 200) {
                        //adiciona o texto que foi retornado para o elemento HTML
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                // abre uma requisição e especifica o método e url onde ela será enviada
                xmlhttp.open("GET", "nomes.php?q=" + str, true);
                // envia a requisição
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>

    <p><b>Start typing a name in the input field below:</b></p>
    <form>
        <!-- define o botão e o evento-->
        First name: <input type="text" onkeyup="showHint(this.value)">
    </form>

        <!-- define as sugestões-->
    <p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>