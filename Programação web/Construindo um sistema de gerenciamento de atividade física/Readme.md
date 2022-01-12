# Gerenciador de atividades físicas

Esse projeto foi pensado para ser um exercício completo tanto de front-end quanto de back-end, ou seja, aqui teremos várias versões do mesmo exercício e cada uma delas terá um foco diferente. 

O objetivo principal é construir um sistema completo para gerenciamento de atividades físicas, para isso, podemos utilizar:
- Programação web (HTML e CSS) para interface 
- Qualquer linguagem de back-end (por exemplo o PHP, Java, Javascript, C# etc.)

Para facilitar o seu acesso vou dividir o projeto em versões:

## Versão 0 - Prototipação + Front-end

A versão 0 desse projeto é dedicada a prototipação de um projeto de software com suas principais interfaces. Para isso, você deverá usar os requisitos descritos [aqui](https://www.computersciencemaster.com.br/construindo-um-gerenciador-de-atividades-fisicas/) e usar um software de prototipação para satisfazer todos os requisitos. A interpretação dos requisitos é livre, assim como um software na vida real você deve tentar compreender o contexto em que o software se insere e buscar criar um protótipo que seja agradável aos olhos do cliente. 

Como resposta desse exercício você encontra a pasta "Projeto no figma" e também a pasta "v0". A pasta do figma contém um arquivo que você poderá enviar ao seu próprio figma e modificar da forma que desejar. Além disso, a pasta "v0" possui uma implementação usando HTML e CSS e um pouquinho de PHP (para executar você precisará de um servidor web Apache). 

O projeto "V0" possui as seguintes características:
- Uma página inicial com botões de login e sign up
- Uma barra de navegação com dois links ativos (home e user dashboard)
- Páginas com cores fortes e figuras ilustrativas dos treinos e relacionados ao aplicativo
- O projeto na sua versão 0 cumpre apenas os requisitos funcionais: RF1, RF3, RF4, RF5, RF6, RF7, RF8
- O requisito não-funcional RNF3 não é atendida (o site não é responsivo)


## Versão 1 - Adicionando reponsividade, interfaces e conceitos de design

Nessa versão do projeto você encontra uma segunda entrega que adiciona as páginas de cadastro de novo treino e complementa o dashboard do usuário. Utilizamos conceitos de design para modificar as cores e tornar o sistema mais agradável ao usuário final. Por fim, adicionamos também características reponsivas ao website, assim ele se adapta a dispositivos de telas menores (smartphones).

O projeto "V1" possui as seguintes características:
- Todos os requisitos funcionais e não funcionais foram atendidos | confira os requisitos [aqui](https://www.computersciencemaster.com.br/construindo-um-gerenciador-de-atividades-fisicas/)
- Nenhuma funcionalidade de back-end foi implementada


## Versão 2 - Adicionando banco de dados e a funcionalidade de login e senha

Nessa versão do projeto você encontra a modelagem de um banco de dados relacional que satisfaz as necessidades de negócio do sistema (até o momento) para criação da funcionalidade de login e senha. Para facilitar a replicação, adicionamos o script SQL dentro da pasta "v2/data/banco.sql", assim, você poderá executar esse script e ter toda a estrutura do banco de dados pronta em sua máquina local.

Alguns pontos importantes sobre o banco de dados:
- Estamos usando o MySQL versão 5.6
- As entidades foram modeladas para versão atual (versões futuras terão modificações)

Funcionalidades implementadas nessa versão:
- Funcionalidade de Login (incluindo alertas, modificações da interface e fluxo de telas)
- Funcionalidade de cadastro de novos usuários
- Funcionalidade de visualização e alteração de dados do perfil do usuário
- Funcionalidade de deleção de conta
