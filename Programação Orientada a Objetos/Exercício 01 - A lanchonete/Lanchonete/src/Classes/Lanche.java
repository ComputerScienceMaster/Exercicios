
package Classes;

public class Lanche extends Prato{
    private String pao;
    private String recheio;
    private String molho;

    public Lanche() {
    }

    public Lanche(String pao, String recheio, String molho) {
        this.pao = pao;
        this.recheio = recheio;
        this.molho = molho;
    }

    public Lanche(String pao, String recheio, String molho, String nome, double preco, String dataDeValidade, double peso) {
        super(nome, preco, dataDeValidade, peso);
        this.pao = pao;
        this.recheio = recheio;
        this.molho = molho;
    }


    public String getPao() {
        return pao;
    }

    public void setPao(String pao) {
        this.pao = pao;
    }

    public String getRecheio() {
        return recheio;
    }

    public void setRecheio(String recheio) {
        this.recheio = recheio;
    }

    public String getMolho() {
        return molho;
    }

    public void setMolho(String molho) {
        this.molho = molho;
    }

    @Override
    public String toString() {
        return "Lanche{" + "pao=" + pao + ", recheio=" + recheio + ", molho=" + molho + '}';
    }

    
}
