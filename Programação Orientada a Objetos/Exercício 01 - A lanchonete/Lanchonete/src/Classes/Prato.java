
package Classes;

public class Prato {
    private String nome;
    private double preco;
    private String dataDeValidade;
    private double peso;

    public Prato() {
    }

    public Prato(String nome, double preco, String dataDeValidade, double peso) {
        this.nome = nome;
        this.preco = preco;
        this.dataDeValidade = dataDeValidade;
        this.peso = peso;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }
    
    
    public double getPreco() {
        return preco;
    }

    public void setPreco(double preco) {
        this.preco = preco;
    }

    public String getDataDeValidade() {
        return dataDeValidade;
    }

    public void setDataDeValidade(String dataDeValidade) {
        this.dataDeValidade = dataDeValidade;
    }

    public double getPeso() {
        return peso;
    }

    public void setPeso(double peso) {
        this.peso = peso;
    }

    @Override
    public String toString() {
        return "Prato{" + "nome=" + nome + ", preco=" + preco + ", dataDeValidade=" + dataDeValidade + ", peso=" + peso + '}';
    }

    
}
