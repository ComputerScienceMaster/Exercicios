#include <stdio.h>
/*

8) Escreva uma função que recebe uma string de caracteres e uma letra e devolve um vetor de inteiros
contendo as posições (índices no vetor da string) onde a letra foi encontrada). Utilize uma variável inteira para
passar o tamanho do vetor original.

*/


void mostrarVetor(int *ret, int tamanho){
    int i;

    for (i = 0 ; i < tamanho; i++){
        printf("- %d - ", *(ret+i));
    }

}

void mostrarString(char *ret, int tamanho){
    int i;

    for (i = 0 ; i < tamanho; i++){
        printf("- %c - ", *(ret+i));
    }

}


int*  localizaCaracteres(char *vet, char c, int tamanho){
    int i,j = 0;
    int *ret = malloc(tamanho * sizeof(int));

    //mostrarString(vet,10);

    for(i = 0 ; i < tamanho ; i++ ){

        if(*(vet+i) == c) {
            ret[j] = i;
            j++;
        }
    }

    return ret;
}


main (){

    char vet[8]= {'v','i','n','i','c','i','u','s'};

    int *ret = localizaCaracteres(vet,'i',8);

    mostrarVetor(ret,8);

}
