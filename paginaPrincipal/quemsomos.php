<?php
// quemsomos.php
?>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 10%;
            background: linear-gradient(90deg, #c62828, #ff7043);
            color: white;
        }
        .texto {
            width: 55%;
        }
        .texto h1 {
            font-size: 42px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .texto p {
            font-size: 18px;
            line-height: 1.6;
        }
        .imagem {
            width: 45%;
            display: flex;
            justify-content: center;
        }
        .imagem img {
            width: 85%;
            border-radius: 14px;
            box-shadow: 0 0 18px rgba(0,0,0,0.45);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="texto">
        <h1>QUEM SOMOS</h1>
        <p>
            A Pizzaria Bella Napoli não é apenas uma pizzaria: é o resultado da paixão por tradição,
            sabor e muita criatividade. Nascida na Paraíba em março de 2015, nossa missão sempre foi
            elevar o conceito de pizza artesanal, trazendo ingredientes selecionados e receitas que
            unem o clássico ao contemporâneo.
        </p>

        <p>
            Desde o início, a Pizzaria Guerrier superou todas as expectativas. Em menos de cinco anos,
            conquistamos clientes em diversas regiões e expandimos rapidamente. Hoje contamos com
            dezenas de unidades em funcionamento e uma base fiel de apaixonados por pizza.
        </p>

        <p>
            Atualmente, somos referência nacional em pizzas artesanais no delivery, com presença em
            em João Pessoa Somos sinônimo de
            qualidade, inovação e excelência no atendimento — tanto presencial quanto no delivery.
        </p>
    </div>

    <div class="imagem">
        <img src="/imagens/imagemIlustrativa.jpg" alt="imagem ilustrativa">
    </div>
</div>

</body>
</html>
