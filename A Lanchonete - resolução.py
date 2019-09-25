#!/usr/bin/env python
# coding: utf-8

# In[1]:


class Prato:
    
    def __init__(self, recheio):
        self.recheio = recheio
        


# In[4]:


class Pizza(Prato): 
    
    def __init__(self, recheio, molho, borda):
        super(recheio)
        self.molho = molho
        self.borda = borda


# In[5]:


class Salgadinho(Prato):
    def __init__(self,recheio, massa):
        super(recheio)
        self.massa = massa


# In[7]:


class Lanche(Prato):
    
    def __init__(self, recheio, pao, molho):
        super(recheio)
        self.pao = pao
        self.molho = molho
        


# In[8]:


class Pedido:
    def __init__(self, nomeCliente, taxaDeServico, itens):
        self.nomeCliente = nomeCliente
        self.taxaDeServico = taxaDeServico
        self.itens = itens
        
    def calcularTotal():
        return 0
    
    def mostrarFatura():
        print("------ fatura-----")
        print("Nome do cliente: " + self.nomeCliente)
        print("Taxa de Serviço: " + self.taxaDeServico)

