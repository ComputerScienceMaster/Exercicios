/*

Implemente a função ultimo_nome que recebe como parâmetro uma cadeia de caracteres com o nome completo de
uma pessoa e retorna um ponteiro (o endereço inicial) do último nome encontrado.

Sua função deve obedecer o seguinte protótipo:
char* ultimo_nome(char *nome_completo);

Atenção: você não pode criar novas cadeias de caracteres dentro da função (estáticas ou dinâmicas).

Exemplos:


Para "Rafael de Moura Machado" a sua função deve retornar um ponteiro para "Machado";
Para "Jose Silva" a sua função deve retornar um ponteiro para "Silva";
Para "ZeNinguem" a sua função deve retornar um ponteiro para "ZeNinguem".

Considere que há apenas um espaço entre os nomes e que após o último nome não há espaços.

Implemente também a função verificaSobrenome, que recebe duas cadeias com os nomes completos de duas pessoas, e,
utilizando a função ultimo_nome, verifica se essas duas pessoas têm o mesmo sobrenome (isto é, o mesmo último nome).
Em caso positivo, a função deve retornar uma nova cadeia alocada dinamicamente com esse sobrenome. Em qualquer outro caso,
a função deve retornar uma cadeia vazia. Havendo problema de alocação de memória, a função deve retornar NULL.


Para simplificar ainda mais, sempre que possível utilize as funções da biblioteca string.h:

int strlen (char* s);
int strcmp (char* s, char *t);
har* strcpy (char* destino, char* fonte);
char* strncpy (char* destino, char* fonte, int n);
char* strcat (char* destino, char* fonte);

Exemplos de nomes:


Para “STEVEN PAUL JOBS” e “JOSE JOBS”, retorna “JOBS”;
Para “JOSE JOBS” e “CHICO ANYSIO”, retorna cadeia vazia “”;
Para “SILVA” e “SILVA”, retorna “SILVA”;
Para “” e “”, retorna cadeia vazia “”;

Em seguida, crie a função principal do programa e utilize a função verificaSobrenome
para verificar se os sobrenomes de dois nomes informados pelo usuário são iguais ou não.
Use os exemplos acima para testar o seu programa.


*/

#include<string.h>


char* ultimo_nome(char* nomeCompleto){
    int ultimoEspaco;
    int i;

    for(i = 0 ; *(nomeCompleto + i) != '\0';i++ ){
        if(*(nomeCompleto + i) == ' '){
            ultimoEspaco = i;
        }
    }


    return nomeCompleto + (ultimoEspaco + 1);

}


char* verificaSobrenome(char* nomeCompleto1, char* nomeCompleto2){
    char* retorno = malloc(50* sizeof(char));
    char* vazia = malloc(50* sizeof(char));

    nomeCompleto1 = ultimo_nome(nomeCompleto1);
    nomeCompleto2 = ultimo_nome(nomeCompleto2);

    int i;


    for(i = 0 ; *(nomeCompleto1 + i) != '\0';i++ ){
        if(*(nomeCompleto1 + i) != *(nomeCompleto2 + i)){
            return vazia;
        }else{
            *(retorno + i) = *(nomeCompleto1 + i);
        }
    }


    return retorno;


}

main(){

    char* nomeCompleto1 = malloc(50 * sizeof(char));
    char* nomeCompleto2 = malloc(50 * sizeof(char));

    char * ultimoNome = malloc(50 * sizeof(char));

    strcpy(nomeCompleto1, "Vinicius dos Santos");
    strcpy(nomeCompleto2, "Janio dos Santos");

    ultimoNome = verificaSobrenome(nomeCompleto1, nomeCompleto2);

    printf("%s", ultimoNome);

}
