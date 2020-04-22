#include<stdio.h>

void main() {
    int x, *p;
    x = 100;
    p = &x; // é necessário usar o & para capturar o endereço de X
    printf("Valor de p: %d.\n", *p);
}
