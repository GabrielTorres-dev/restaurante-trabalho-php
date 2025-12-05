# restaurante-trabalho-php
Grupo: Gabriel Torres, Paulo Victor, Giuli Eduardo.

O trabalho vai se basear em um site para um restaurante modelo pizzaria.

Vai ter uma aba inicial com um topo "Quem somos, Lojas, Aba de pedidos". 

O que terá nessa aba inicial?

-Quem somos: História da pizzaria e como ela começou.
-Loja: Localização física da loja.
-Aba de pedidos: Formulário para cadastro do cliente, depois do preenchimento será direcionado ao carrinho para ser efetuado o seu pedido.


Além disso, terá um banco de dados onde vai ser cadastrado os dados do cliente e o seu pedido na pizzaria.
Onde esse banco de dados vai salvar o dados do cliente, numero do pedido, depois que o pedido for feito ele vai imprimir na tela um tempo de pedido ficticio.

Banco de dados:

CREATE TABLE Clientes (

id_cliente INT AUTO_INCREMENT PRIMARY KEY,

pedidos INT NOT NULL,

nome_cliente VARCHAR (100) NOT NULL,

endereco VARCHAR(200),

numero_contato VARCHAR(20)

);

CREATE TABLE Pizzas (

id_pizza INT AUTO_INCREMENT PRIMARY KEY,

saborDePizza VARCHAR(100) NOT NULL,

valorDaPizza DECIMAL (10,2) NOT NULL

ID único para cada sabor

Nome do sabor da pizza

Valor da pizza

);