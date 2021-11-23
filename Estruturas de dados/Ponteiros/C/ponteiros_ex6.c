#include <stdio.h>
/*

6)Crie uma função que receba uma string como parâmetro (de tamanhodesconhecido) e retorne uma cópia da mesma.
A assinatura da função deveser:char *strcopy(char *str, int tamanho);

*/

char* strcpy(char *str , int tamanho){
    int i;
    char* r = malloc (tamanho * sizeof(char));
    for (i = 0 ; ; i++){
        *(r + i) = *(str + i);
        if(*(str + i) == '\o'){
            break;
        }
    }
    //printf("[%c]", *r);
    return r;
}


void main (){
    char nome[9] ={'v','i','n','i','c','i','u','s','\o'};

    char* copia = strcpy(nome,9);

    printf("string: %s", copia);

}


