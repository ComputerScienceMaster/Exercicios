package Classes;

public class Salgadinho extends Prato{
    private String recheio;
    private String massa;

    public Salgadinho() {
    }

    public Salgadinho(String recheio, String massa) {
        this.recheio = recheio;
        this.massa = massa;
    }

    public Salgadinho(String recheio, String massa, String nome, double preco, String dataDeValidade, double peso) {
        super(nome, preco, dataDeValidade, peso);
        this.recheio = recheio;
        this.massa = massa;
    }

    public String getRecheio() {
        return recheio;
    }

    public void setRecheio(String recheio) {
        this.recheio = recheio;
    }

    public String getMassa() {
        return massa;
    }

    public void setMassa(String massa) {
        this.massa = massa;
    }

    @Override
    public String toString() {
        return "Salgadinho{" + "recheio=" + recheio + ", massa=" + massa + '}';
    }
}
