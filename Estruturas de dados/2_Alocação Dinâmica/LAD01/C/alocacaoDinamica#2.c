/*

2) Faça uma função que receba um valor n e crie dinamicamente um vetor de n elementos e
retorne um ponteiro.

Crie uma função que receba um ponteiro para um vetor e um valor n e imprima os n elementos desse vetor.

Construa também uma função que receba um ponteiro para um vetor e libere esta área de memória.

Ao final, crie uma função principal que leia um valor n e chame a função criada acima.

Depois, a função principal deve ler os n elementos desse vetor.

Então, a função principal deve chamar a função de impressão dos n elementos do vetor criado e, finalmente, liberar
a memória alocada através da função criada para liberação.


*/

int* criarVetor(int n){
    int *vet = malloc(n * sizeof(int));
    return vet;
}

void mostrarVetor(int* vet, int n){
    int i;

    for(i = 0 ; i < n ; i++){
        printf("-%d-", *(vet + i));
    }

}

void liberarVetor(int* vet){

    free(vet);

}




main(){
    int *vet = criarVetor(10);
    int i;

    for(i = 0 ; i < 10 ; i++){
        printf("Digite um numero: ");
        scanf("%d", vet + i);
    }

    mostrarVetor(vet,10);

    liberarVetor(vet);

}
