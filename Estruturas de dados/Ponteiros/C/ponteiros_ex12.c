#include <stdio.h>
/*

12) Qual é a saída deste programa?

// execute para saber o resultado.

*/

void main(){

   int i = 5;
   int *p;
   p = &i;
   printf("%x, %d, %d ,%d, %d", p,(*p+2),**&p, (3**p),(**&p+4));

}
