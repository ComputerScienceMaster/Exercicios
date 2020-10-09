package lanchonete;

import Classes.Lanche;
import Classes.Pedido;
import Classes.Pizza;
import Classes.Prato;
import Classes.Salgadinho;
import java.util.ArrayList;
import java.util.Scanner;

public class Lanchonete {

    static ArrayList<Pedido> pedidos = new ArrayList<>();
    static ArrayList<Prato> pratosDisponiveis = new ArrayList<>();
    static Scanner sc = new Scanner(System.in);

    public static void main(String[] args) {
        carregarDados();

        int op = 0;

        while (true) {
            System.out.println("----Bem vindos ao Quase Três Lanches----\n");
            System.out.println("1) Fazer pedido\n2) sair");
            op = sc.nextInt();
            switch (op) {
                case 1:
                    fazerPedido();
                    break;
                case 2:
                    return;
            }
        }
    }

    public static void carregarDados() {
        Pizza p1 = new Pizza("Bolonhesa", "peperoni", "catupiry","Pizza de peperoni", 40.0, "22/11/2020", 40);
        Pizza p2 = new Pizza("3 Queijos", "Gorgonzola", "calabresa", "Pizza de 3 queijos", 40.0, "10/2/2020", 40);
        Pizza p3 = new Pizza("Mostarda e Mel", "provolone", "Scala", "Pizza Provoleta", 40.0, "12/8/2020", 40);

        Lanche l1 = new Lanche("Brioche", "calabresa", "Catshup mostarda","Calabria", 13, "22/10/2020", 300);
        Lanche l2 = new Lanche("Francês", "Ovos e bacon", "Catupiry","Francaise", 33, "13/11/2020", 400);
        Lanche l3 = new Lanche("Hamburger", "Frango catupiry", "Requeijão","Catupifrango", 20, "04/2/2020", 400);

        Salgadinho s1 = new Salgadinho("Frango", "Batata","Bolete de frango", 5, "22/10/2020", 50);
        Salgadinho s2 = new Salgadinho("Calabresa", "Mandioca","Coxinha de calabresa", 6, "02/5/2020", 60);
        Salgadinho s3 = new Salgadinho("Carne moída", "Batata","Coxinha de carne moída" ,10, "13/3/2020", 70);

        pratosDisponiveis.add(p1);
        pratosDisponiveis.add(p2);
        pratosDisponiveis.add(p3);

        pratosDisponiveis.add(l1);
        pratosDisponiveis.add(l2);
        pratosDisponiveis.add(l3);

        pratosDisponiveis.add(s1);
        pratosDisponiveis.add(s2);
        pratosDisponiveis.add(s3);

    }

    public static void fazerPedido() {
        Pedido p = new Pedido();
        System.out.println("Nome do cliente:");
        p.setNomeCliente(sc.nextLine());
        int op = -1;
        while (true) {
            for (int i = 0; i < pratosDisponiveis.size(); i ++){
                System.out.println(i + ")" + pratosDisponiveis.get(i).getNome());
            }
            System.out.println("Digite 0 para encerrar o pedido");
            op = sc.nextInt();
            if(op != 0 ){
                ArrayList<Prato> temp = new ArrayList<>();
                
                temp = p.getItensConsumidos();
                System.out.println(temp);
                temp.add(pratosDisponiveis.get(op));
                p.setItensConsumidos(temp);
            }else{
                break;
            }
        }
       
        p.imprimirNotaFiscal();
        
    }

}
