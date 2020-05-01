<html>
<head>
    <script>
        //define a função que será chamada a cada vez que o usuário digitar uma letra no text box

        function showContact() {

            var numero = document.getElementById("numero");
            console.log(parseInt(numero.value) + 1);
            numero.setAttribute("value", parseInt(numero.value) + 1 ) ;
            
            var xmlhttp = new XMLHttpRequest();
                // adiciona um listener e adiciona ao listenet uma função anônima
                xmlhttp.onreadystatechange = function() {
                    // caso a requisição tenha sucesso...
                    if (this.readyState == 4 && this.status == 200) {
                        //adiciona o texto que foi retornado para o elemento HTML
                        
                        var contato = JSON.parse(this.responseText)
                        console.log(numero.value);
                        document.getElementById("nome").innerHTML = contato['nome'];
                        document.getElementById("foto").setAttribute("src",contato['foto']);

                    }
                };
                // abre uma requisição e especifica o método e url onde ela será enviada
                xmlhttp.open("GET", "contatos.php?id=" + numero.value, true);
                // envia a requisição
                xmlhttp.send();

            }

        </script>
    </head>
    <body>

        <p><b>Tinder fake</b></p>


        <!-- define a interface-->
        <div>
            <img id="foto" heigth="300" width="300" src="https://cdn.vezdavoz.com.br/wp-content/uploads/2019/06/Isaac.jpg">
            <p id="nome"></p>
        </div>
        <form>
            <!-- define o botão e o evento-->
            <input type="hidden" id="numero" value="0">
            <input type="button" value="Like" onclick="showContact()">
            <input type="button" value="DesLike" onclick="showContact()">
        </form>
    </body>
    </html>