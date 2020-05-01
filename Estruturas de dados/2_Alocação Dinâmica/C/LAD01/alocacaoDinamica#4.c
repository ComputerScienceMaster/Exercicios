/*

4) Criar um tipo abstrato de dados que represente uma pessoa, contendo nome, data de nascimento e CPF.

Aloque dinâmicamente uma variável desse novo TAD (no programa principal).

Depois crie uma função que receba este ponteiro e preencha os dados da estrutura.

A seguir crie também uma uma função que receba este ponteiro e imprima os dados da estrutura.

Finalmente, faça a chamada a esta função na função principal.

*/


#include<stdio.h>
#include<stdlib.h>

struct pessoa {
    char nome[100];
    int diaNascimento;
    int mesNascimento;
    int anoNascimento;
    long cpf;
};


typedef struct pessoa Pessoa;

Pessoa receberDados(Pessoa *p){
    strcpy(p->nome,"vinicius");
    p->cpf = 35919351;
    p->diaNascimento = 22;
    p->anoNascimento = 1990;
    p->mesNascimento = 10;
}

void imprimirPessoa(Pessoa *p){
    printf("Nome: %s\nData de nascimento: %d/%d/%d\nCPF: %d ", p->nome,p->diaNascimento,p->mesNascimento,p->anoNascimento,p->cpf);
}

int main(){
    Pessoa *p = malloc(sizeof(Pessoa));
    receberDados(p);
    imprimirPessoa(p);

}
