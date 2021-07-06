package view;

import control.CompraJpaController;
import control.PessoaJpaController;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import model.Compra;
import model.Pessoa;

public class TesteJPA {

    public static void main(String[] args) {
        Pessoa p = new Pessoa();

        Date d = new Date();
        p.setNome("Isabela");
        p.setLogin("isabela tal");
        p.setEmail("icastilhog@gmail.com");
        p.setSenha("teste");

        try {

            PessoaJpaController j = new PessoaJpaController(EmProvider.getInstance().getEntityManagerFactory());
            j.create(p);

            System.out.println(j.findPessoaEntities());

        } catch (Exception ex) {
            Logger.getLogger(TesteJPA.class.getName()).log(Level.SEVERE, null, ex);
        }

        List<Compra> compras = new ArrayList<>();

        Compra c1 = new Compra();
        c1.setData(d);
        c1.setFormaDePagamento("Cartão");
        c1.setPessoaidPessoa(p);
        try {
            CompraJpaController c = new CompraJpaController(EmProvider.getInstance().getEntityManagerFactory());

            c.create(c1);
            compras.add(c1);

            p.setCompraList(compras);
        } catch (Exception ex) {
            Logger.getLogger(TesteJPA.class.getName()).log(Level.SEVERE, null, ex);
        }

    }
}
