/*

1) Implemente um programa que contenha a função inverte.
Essa função recebe como parâmetro uma cadeia de caracteres e retorna uma nova cadeia,
que corresponde à cadeia original, lida de trás para frente (a cadeia passada como parâmetro não pode ser alterada).
Por exemplo, recebendo como parâmetro a cadeia "Aluno", essa função retornaria a cadeia "onulA". Sua função deve ter
o seguinte protótipo:

char *inverte(char cadeia[]);

Em seguida, escreva a função principal do programa e utilize a função inverte
para inverter uma cadeia de caracteres informada pelo usuário.

*/

#include<stdio.h>
#include<malloc.h>


void inverte(char cadeia[], char retorno[]){
    int tamanho = 0, i,j;

    for(i = 0 ; cadeia[i] != '\0' ; i++){
        tamanho++;
    }

    for(i = tamanho - 1 ,j = 0; i >= 0 ; i--,j++){
         retorno[j] = cadeia[i];
    }
    return retorno;
}


int main(){
    char cadeia[5] = {'v','i','n','i','\0'};
    char retorno[5];

    inverte(cadeia, retorno);
    int i;
    for(i = 0  ; retorno[i]!= '\0'; i++){
        printf("%c", retorno[i]);
    }
}
