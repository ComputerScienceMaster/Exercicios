/*

(sem usar o computador) Qual o conteúdo do vetor a depois dos seguintescomandos.

*/

void imprimir(int a[]){
    int i;

    for (i = 0 ; i < 99 ; i++ ){
            printf("% - d - ", a[i]);
    }
}


void main (){
    int i, a[99];

    for (i = 0; i < 99; ++i)
        a[i] = 98 - i;

    for (i = 0; i < 99; ++i)
        a[i] = a[a[i]];

    imprimir(a);
}


