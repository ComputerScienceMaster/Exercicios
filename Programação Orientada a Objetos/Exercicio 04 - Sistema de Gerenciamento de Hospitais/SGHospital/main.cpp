#include <iostream>
#include<string>

using namespace std;

class Pessoa {
private:
    string nome;
    string dataDeNascimento;
    char sexo;
public:

    Pessoa() {
    }

    Pessoa(string nome, string dataDeNascimento, char sexo) :
    nome(nome), dataDeNascimento(dataDeNascimento), sexo(sexo) {
    }

    string GetDataDeNascimento() const {
        return dataDeNascimento;
    }

    void SetDataDeNascimento(string dataDeNascimento) {
        this->dataDeNascimento = dataDeNascimento;
    }

    string GetNome() const {
        return nome;
    }

    void SetNome(string nome) {
        this->nome = nome;
    }

    char GetSexo() const {
        return sexo;
    }

    void SetSexo(char sexo) {
        this->sexo = sexo;
    }




};

class Medico : public Pessoa {
private:
    string especialidade;

public:

    Medico() {
    }
    
    Medico(string nome, string dataDeNascimento, char sexo, string especialidade) :
    Pessoa(nome, dataDeNascimento, sexo), especialidade(especialidade) {
    }

    string GetEspecialidade() const {
        return especialidade;
    }

    void SetEspecialidade(string especialidade) {
        this->especialidade = especialidade;
    }

};

class Paciente : public Pessoa {
private:
    string cartaoSUS;

public:

    Paciente() :
    Pessoa() {
    }

    Paciente(string nome, string dataDeNascimento, char sexo, string cartaoSUS) :
    Pessoa(nome, dataDeNascimento, sexo), cartaoSUS(cartaoSUS) {
    }


    string GetCartaoSUS() const {
        return cartaoSUS;
    }

    void SetCartaoSUS(string cartaoSUS) {
        this->cartaoSUS = cartaoSUS;
    }

};

class Tratamento {
private:
    string tipo;
    int duracao;
    string unidadeDeMedidaDuracao;
    bool oferecidoPeloSus;
public:

    Tratamento() {
    }

    Tratamento(string tipo, int duracao, string unidadeDeMedidaDuracao, bool oferecidoPeloSus) :
    tipo(tipo), duracao(duracao), unidadeDeMedidaDuracao(unidadeDeMedidaDuracao), oferecidoPeloSus(oferecidoPeloSus) {
    }

    int GetDuracao() const {
        return duracao;
    }

    void SetDuracao(int duracao) {
        this->duracao = duracao;
    }

    bool IsOferecidoPeloSus() const {
        return oferecidoPeloSus;
    }

    void SetOferecidoPeloSus(bool oferecidoPeloSus) {
        this->oferecidoPeloSus = oferecidoPeloSus;
    }

    string GetTipo() const {
        return tipo;
    }

    void SetTipo(string tipo) {
        this->tipo = tipo;
    }

    string GetUnidadeDeMedidaDuracao() const {
        return unidadeDeMedidaDuracao;
    }

    void SetUnidadeDeMedidaDuracao(string unidadeDeMedidaDuracao) {
        this->unidadeDeMedidaDuracao = unidadeDeMedidaDuracao;
    }

};


class Doenca {
private:
    int SID;
    string nome;
    string tipo;
    Tratamento tratamento;

public:

    Doenca() {
    }

    Doenca(int SID, string nome, string tipo, Tratamento tratamento) :
    SID(SID), nome(nome), tipo(tipo), tratamento(tratamento) {
    }

    int GetSID() const {
        return SID;
    }

    void SetSID(int SID) {
        this->SID = SID;
    }

    string GetNome() const {
        return nome;
    }

    void SetNome(string nome) {
        this->nome = nome;
    }

    string GetTipo() const {
        return tipo;
    }

    void SetTipo(string tipo) {
        this->tipo = tipo;
    }

    Tratamento GetTratamento() const {
        return tratamento;
    }

    void SetTratamento(Tratamento tratamento) {
        this->tratamento = tratamento;
    }


};

class Consulta {
private:
    Medico medico;
    Paciente paciente;
    string data;
    string horario;
    string local;

public:

    consulta() {
    }

    Consulta(Medico medico, Paciente paciente, string data, string horario, string local) :
    medico(medico), paciente(paciente), data(data), horario(horario), local(local) {
    }

    string GetData() const {
        return data;
    }

    void SetData(string data) {
        this->data = data;
    }

    string GetHorario() const {
        return horario;
    }

    void SetHorario(string horario) {
        this->horario = horario;
    }

    string GetLocal() const {
        return local;
    }

    void SetLocal(string local) {
        this->local = local;
    }

    Medico GetMedico() const {
        return medico;
    }

    void SetMedico(Medico medico) {
        this->medico = medico;
    }

    Paciente GetPaciente() const {
        return paciente;
    }

    void SetPaciente(Paciente paciente) {
        this->paciente = paciente;
    }

};

int main(int argc, char** argv) {
    
    Medico medicos[5];
    
    Medico m1("Rodrigo Lombardi", "10/10/1990",'M', "4939139941","Cardiologista");
    Medico m2("Joao Alfredo", "14/10/1940",'M', "49312412211","Infectologista");
    Medico m3("Luiz Albano", "20/10/1950",'M', "49391531511","Ginecologista");
    
    medicos[0] = m1;
    medicos[1] = m2;
    medicos[2] = m3;
    
    
    string nome;
    string dob;
    char sexo;
    string cartaoSus;
    
    cout << "Informe seu nome:" << endl;
    cin >> nome;
    cout << "informe sua data de nascimento" << endl;
    cin >> dob;
    cout << "Informe seu sexo (M) ou (F)" << endl;
    cin >> sexo;
    cout << "informe o número do seu cartao sus" << endl;
    cin >> cartaoSus;
    
    Paciente p1(nome,dob,sexo,cartaoSus);
    
    //Agendamento de consultas
    
    cout << "\n Agendamento de consultas\n";
    
    cout << "selecione um médico:" << endl;
    
    
    for( int i = 0 ; i < 5 ; i++){
        cout << i + ")" <<  medicos[i].GetNome() << " - " << medicos[i].GetEspecialidade();
    }
    int medicoEscolhido;
    cin >> medicoEscolhido;
    
    string data;
    string horario;
    string local;
    
    cout << "digite a data da consulta" << endl;
    cin >> data;
    
    cout << "digite o horario da consulta" << endl;
    cin >> horario;
    
    cout << "digite o local consulta" << endl;
    cin >> local;
    
    Consulta c1(medicos[medicoEscolhido], p1, data, horario,local);
    
    cout << "A consulta foi agendada... " << endl;
    cout << c1.GetMedico().GetNome() << " - " << c1.GetPaciente().GetNome() << " - " << c1.GetLocal() << " - " << c1.GetData() << " - " << c1.GetHorario();    

    return 0;
}

