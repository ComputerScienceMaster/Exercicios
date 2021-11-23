/*

3)Escreva uma função mm que receba um vetor inteiro v[0..n-1] e os endereçosde duas variáveis inteiras,
 digamos min e max, e deposite nessas variáveis ovalor de um elemento mínimo e o valor de um elemento
  máximo do vetor. Escreva também uma função main que use a função mm.

*/

const int MAX = 20000000;

void minimax(int vet[], int *min , int * max)
{
    int i, vMin = MAX, vMax = 0;

    for (i = 0 ; i < 5; i++ ){
        if(vet[i] < vMin){
            vMin = vet[i];
        }
        if(vet[i] > vMax){
            vMax = vet[i];
        }
    }

    *min = vMin;
    *max = vMax;
}


main(){
    int vet[5] = {5,3,7,9,2};
    int min = 0, max = 0;

    minimax(vet,&min, &max);

    printf("min = %d - max = %d", min, max);


}
