/*
   2) Analise o seguinte programa descrito na forma de pseudocódigo:

1. algoritmo
2. declare X[10], n, i, aux, flag numérico
3. para i ← 1 até 10 faça
4. leia X[i]
5. n ← 1
6. flag ← 1
7. enquanto (n ≤ 10 E flag = 1) faça
8. inicio
9. flag ← 0
10. para i ← 1 até 9 faça
11. inicio
12. se (X[i] < X[i+1]) então
13. inicio
14. flag ← 1
15. aux ← X[i]
16. X[i] ← X[i+1]
17. X[i+1] ← aux
18. fim_se
19. fim_para
20. n ← n + 1
21. fim_enquanto
22. para i ← 1 até 10 faça
23. escreva X[i]
24. fim_algoritmo


3) Sobre o comportamento assintótico do algoritmo de ordenação Merge Sort, assinale a alternativa que

MERGESORT(V, i, j)
(1) Se (i<j) então
(2) m = (i+j)/2;
(3) MERGESORT(v, i, m);
(4) MERGESORT(v, m+1, j);
(5) MESCLAR(v, i, m, j);
(6) Fim;

apresenta, corretamente, sua complexidade.
a) O(log n)
b) O(n log n)
c) O(n2)
d) O(n3)
e) O(2n)

 */
