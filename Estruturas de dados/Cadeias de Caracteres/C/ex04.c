/*

4) Implemente uma função que receba como parâmetros uma cadeia de caracteres e um caractere. A função deve retirar
da cadeia todas as ocorrências desse caractere. A função deve obedecer ao seguinte protótipo:

char* retiraChar(char *str, char c);

Você deve alocar a nova cadeia de caracteres dinamicamente e copiar os caracteres da cadeia original para a área
de memória alocada, exceto os caracteres que deverão ser retirados da cadeia original. A cadeia alocada deve ter o
tamanho exato para comportar os caracteres que serão copiados, além do caractere nulo.

Em seguida, escreva a função principal do programa que permita ao usuário digitar um texto (tamanho máximo 100). Após
digitar o texto, o programa deve perguntar se o usuário deseja remover algum caractere do texto. Se o usuário digitar algum
caractere diferente de 0, o programa deve usar a função retiraChar para eliminar o caractere digitado e exibir o resultado.

*/

char* retiraChar(char *str, char c){

}

main(){
    char* frase = malloc(20 * sizeof(char));
    char caractere;
    scanf("%s", frase);
    scanf("%c", &caractere);

}
