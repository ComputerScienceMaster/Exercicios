#include <stdio.h>
/*

9) Qual o resultado d o código abaixo? Explique cada linha.

*/


main (){

   int x = 100; // declaração de x e atribuição do valor 100;
   int *p ,**pp; //declaração de duas variáveis, ponteiro de inteiro. Também outro ponteiro de ponteiro de inteiro.
   p = &x; // ponteiro p recebe endereço de x;
   pp = &p; // ponteiro de ponteiro de inteiro pp recebe o endereço de p
   printf("Valor de pp: %d\n", **pp); // agora imprimimos o valor de pp desreferenciado

}
