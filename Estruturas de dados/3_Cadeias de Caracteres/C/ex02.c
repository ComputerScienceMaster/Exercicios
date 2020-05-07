/*

2) Escreva um programa que contenha a função contaLetras, que:

Recebe: uma cadeia de caracteres (ou seja, um ponteiro para uma cadeia), e o endereço de duas variáveis onde devem devolvidas as respostas;
Retorna: (nas variáveis cujos endereços foram recebidos) dois valores: o número de letras maiúsculas e o número de letras minúsculas.

Em seguida, implemente a função principal do programa que utilize a função contaLetras para exibir na tela o
total de letras maiúsculas e o total de letras minúsculas existentes em uma cadeia de caracteres informada pelo usuário.

*/

int contaLetras(char cadeia[], int* maiusculas, int* minusculas){

    int qtdM = 0;
    int qtdm = 0;
    int i;

    for (int i = 0 ; i < 5; i++){
            printf("-%c-", cadeia[i]);
        if (cadeia[i] >= 'a' && cadeia[i] <= 'z'){
            qtdm++;
        }
        if (cadeia[i] >= 'A' && cadeia[i] <= 'Z'){
            qtdM++;
        }
    }
    *maiusculas = qtdM;
    *minusculas = qtdm;
}


main(){
    int maiusculas;
    int minusculas;
    char cadeia[5] = {'V','i','N','i','c'};
    contaLetras(cadeia, &maiusculas, &minusculas);

    printf("Maiusculas: %d - Minusculas: %d", maiusculas, minusculas);
}
