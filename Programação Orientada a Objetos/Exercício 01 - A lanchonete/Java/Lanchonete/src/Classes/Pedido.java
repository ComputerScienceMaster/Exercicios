package Classes;

import java.util.ArrayList;
import java.util.Scanner;

public class Pedido {

    private String nomeCliente;
    private double taxaDeServico;
    private ArrayList<Prato> itensConsumidos;

    public Pedido() {
        itensConsumidos = new ArrayList<>();
    }

    public Pedido(String nomeCliente, double taxaDeServico, ArrayList<Prato> itensConsumidos) {
        this.nomeCliente = nomeCliente;
        this.taxaDeServico = taxaDeServico;
        this.itensConsumidos = itensConsumidos;
    }

    public String getNomeCliente() {
        return nomeCliente;
    }

    public void setNomeCliente(String nomeCliente) {
        this.nomeCliente = nomeCliente;
    }

    public double getTaxaDeServico() {
        return taxaDeServico;
    }

    public void setTaxaDeServico(double taxaDeServico) {
        this.taxaDeServico = taxaDeServico;
    }

    public ArrayList<Prato> getItensConsumidos() {
        return itensConsumidos;
    }

    public void setItensConsumidos(ArrayList<Prato> itensConsumidos) {
        this.itensConsumidos = itensConsumidos;
    }

    @Override
    public String toString() {
        return "Pedido{" + "nomeCliente=" + nomeCliente + ", taxaDeServico=" + taxaDeServico + ", itensConsumidos=" + itensConsumidos + '}';
    }

    public double calcularTaxaDeServico() {
        double somaItens = 0.0;
        for (Prato p : itensConsumidos) {
            somaItens += p.getPreco();
        }
        double taxa = somaItens * 0.1;
        return taxa;
    }

    public double calcularTroco() {
        double valorRecebido;
        Scanner sc = new Scanner(System.in);
        valorRecebido = sc.nextDouble();
        double somaItens = 0.0;
        for (Prato p : itensConsumidos) {
            somaItens += p.getPreco();
        }
        double troco = (valorRecebido - somaItens);
        return troco;
    }

    public void imprimirNotaFiscal() {
        System.out.println("----Nota Fiscal-----");
        System.out.println("Itens consumidos:");
        double valorFinal = 0.0;
        for (Prato p : itensConsumidos) {
            System.out.println(p);
            valorFinal += p.getPreco();
        }
        System.out.println("Valor final a pagar:" + valorFinal);
        System.out.println("A taxa de serviço é:" + calcularTaxaDeServico());
        System.out.println("O troco é: " + calcularTroco());

        System.out.println("--------Fim---------");
    }

}
