#include<stdio.h>
#include<stdlib.h>
#include<iostream>
#include<string>

class Calculator{
    private:
    int valueA, valueB;
    char op;

    int testValue(int x){
        if(x >= -100 && x <= 100)
            return 1;
        return 0;
    }

    public:

    Calculator(){
        setValueA(0);
        setValueB(0);
        setOp(32);
    }

    Calculator(int valor1, int valor2, char sinal){
        setValueA(valueA);
        setValueB(valueB);
        setOp(op);
    }


    void setValueA(int v1){
        if(testValue(v1)){
            valueA = v1;
        }
    }

     void setValueB(int v1){
        if(testValue(v1)){
            valueB = v1;
        }
    }

    void setOp(char s){
        if(testOperator(s)){
            op = s;
        }
    }

    int getValueA(){
        return valueA;
    }

    int getValueB(){
        return valueB;
    }

    char getOp(){
        return op;
    }


    bool testOperator(char sinal){
        bool isValid = false;
        if(sinal=='+')return true;
        if(sinal=='-')return true;
        if(sinal=='x')return true;
        if(sinal=='/')return true;
        return isValid;
    }


    int calculate(){
        int r = 0;
        if(op == '+'){
                r = valueA + valueB;
        }
        if(op== '-') r = valueA - valueB;
        if(op== 'x') r = valueA * valueB;
        if(op== '/' && valueA != 0) {
            r = valueA / valueB;
        } else if(valueA == 0){
            printf("It is not possible divide by 0!");
        }
        return r;
    }


    void show(){
        printf("\n %d %c %d = %d",valueA, op, valueB, calculate());
    }

    void captureInformations(){
        while(true){
            printf("\n Type the first value(between -100 - 100):");
            scanf("%d",&valueA);
            if(testValue(valueA)!=0){
                break;
            }
        }
         while(true){
            printf("\n Type the first value(between -100 - 100):");
            scanf("%d", &valueB);
            if(testValue(valueB) != 0){
                break;
            }
        }
         while(true){
            fflush(stdin);
            printf("\n Which operation (+  -  x  /):");
            scanf("%c", &op);
            if(testOperator(op)){
                break;
            }
        }
    }


};



int main(int qtd, char *txt[]){
	int v1,v2;
	char op;
    Calculator c;
    //test for wrong number of arguments
    if(qtd==2 || qtd==3 || qtd>4){
        printf("\n Syntax error!!!! type 1 + 2 <press enter>");
        return 0;
    }

    if(qtd==1){ //no parameters
        printf("\n Math operation : valueA operator(+,-,x,/) valueB");
        c.captureInformations();
        c.show();
        return 0;
    }

    if(qtd==4){ //correct parameters typed: E.g: 10 x 2<pressed enter>

    op=txt[2][0];

        if(c.testOperator(op)){
            v1 = atoi(txt[1]);
            v2 = atoi(txt[3]);
            printf("\n Math operation= %c",op);
            c.setValueA(v1);
            c.setValueB(v2);
            c.setOp(op);
            c.show();
            return 0;
        }
        else{
            printf("\n Invalid operation!!");
        }
    }
return 0;
}
