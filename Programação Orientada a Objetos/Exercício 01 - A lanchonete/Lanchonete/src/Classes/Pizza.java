package Classes;

public class Pizza extends Prato {
    private String molho;
    private String recheio;
    private String borda;

   public Pizza() {
   }

    public Pizza(String molho, String recheio, String borda) {
        this.molho = molho;
        this.recheio = recheio;
        this.borda = borda;
    }

    public Pizza(String molho, String recheio, String borda, String nome, double preco, String dataDeValidade, double peso) {
        super(nome, preco, dataDeValidade, peso);
        this.molho = molho;
        this.recheio = recheio;
        this.borda = borda;
    }
 
   
    public String getMolho() {
        return molho;
    }

    public void setMolho(String molho) {
        this.molho = molho;
    }

    public String getRecheio() {
        return recheio;
    }

    public void setRecheio(String recheio) {
        this.recheio = recheio;
    }

    public String getBorda() {
        return borda;
    }

    public void setBorda(String borda) {
        this.borda = borda;
    }

    @Override
    public String toString() {
        return "Pizza{" + "molho=" + molho + ", recheio=" + recheio + ", borda=" + borda + '}';
    }

}
