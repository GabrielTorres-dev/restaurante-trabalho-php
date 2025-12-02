<link rel="stylesheet" href="style.css">

<section class="section-flex">
        <img id="logo" src="https://static.ifood-static.com.br/image/upload/t_high/logosgde/2c639475-b65d-4cf8-aaf3-720837de9a6c/202006111850_sUP6_i.png" alt="Foto da logo do Burguês">
        <div>
            <h2><b id="frase1">A REVOLUÇÃO DO SABOR COMEÇA AQUI</b><br>
            <p class="texto-section" id="h2"> No O Burguês, cada hambúrguer é uma experiência. Com ingredientes frescos, combinações ousadas e um toque artesanal, a gente transforma seu lanche em um momento inesquecível. Do clássico ao criativo, temos o hambúrguer perfeito para o seu apetite.
            Sinta-se em casa, escolha o seu favorito e prepare-se para devorar!</h2></p>
        </div>
    </section>
    <section id="quem-somos" class="section-flex2">
        <img class="img-right" src="https://www.agerio.com.br/wp-content/uploads/2023/03/274245323_1371280946660092_8776269945200256239_n-1024x736.jpg" 
         alt="Equipe O Burguês" style=" width: 500px; border-radius: 20px;"> 
        <div class="texto-section2">

            <h2 id="frase2">QUEM SOMOS</h2>
            <p id="h2">
            <h5 id="text">O Burguês não é só uma hamburgueria, é o resultado da paixão por comida e muita criatividade. Nascida no Rio de Janeiro em fevereiro de 2017, a ideia era inovar o mercado de hambúrgueres. O Burguês superou todas as expectativas, Em apenas cinco anos, o crescimento foi meteórico: 51 franquias abertas!<br><br>
            Hoje, O Burguês se tornou a maior hamburgueria delivery do Brasil, com unidades no Ceará, Bahia, Minas Gerais, Espírito Santo, São Paulo e Paraná. Somos sinônimo de qualidade e inovação, com foco tanto no atendimento presencial quanto no delivery.</h5>
            </p>
        </div>
    </section>
        <hr id="linha">
    <div id="lojas">
            <nav id="banner">
                <video src="../assets.video/Vídeo sem título.mp4" class="midia"  autoplay loop muted  ></video>
        <div class="description">
            <h1>NOSSAS LOJAS</h1>
            <p>Estamos presentes em 14 estados brasileiros, levando o sabor do O Burguês para você. Confira nossas lojas e venha nos visitar!</p>
            <br><br><br><br>
        </div> 
        <div class="mapa-sobreposto">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.144036746086!2d-34.83031049999999!3d-7.109301299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acddd3abfd7559%3A0x1bf87109ecd0a68b!2sO%20Burgu%C3%AAs%20Hamburgueria%20Cl%C3%A1ssica%20-%20Jo%C3%A3o%20Pessoa!5e0!3m2!1spt-BR!2sbr!4v1748216680679!5m2!1spt-BR!2sbr"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        <nav class="button">
            <a href="https://www.google.com/maps/place/O+Burgu%C3%AAs+Hamburgueria+Cl%C3%A1ssica+-+Jo%C3%A3o+Pessoa/@-7.1084709,-34.8269309,15z/data=!4m6!3m5!1s0x7acddd3abfd7559:0x1bf87109ecd0a68b!8m2!3d-7.1093013!4d-34.8303105!16s%2Fg%2F11t1dth1zc?entry=ttu&g_ep=EgoyMDI1MDUyMS4wIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D"><button><b>ver no mapa</b></button></a>
        </nav>
        </div>
    </div>

        <hr id="linha">
        <nav id="formulario">
            <form class="formulario" action="pedidos.php" method="post">
                <h2>Realize o seu pedido!</h2>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome_cliente" required placeholder="Seu nome completo">

                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="numero_contato" required placeholder="(99) 99999-9999">

                <label for="endereco">Endereço:</label >
                <input type="text" id="endereco" name="endereco" required placeholder="Rua Exemplo, 123">

                <label for="estado">Cidade:</label>
                <select id="estado" name="estado" required>
                <option value="" disabled selected>Selecione sua cidade</option>
                <option value="paraiba-pb">João Pessoa - PB</option>
                <option value="sao-paulo-sp">São Paulo - SP</option>
                <option value="rio-de-janeiro-rj">Rio de Janeiro - RJ</option>
                <option value="bahia-ba">Salvador - BA</option>
                <option value="minas-gerais-mg">Belo Horizonte - MG</option>
                <option value="espirito-santo-es">Vitória - ES</option>
                <option value="parana-pr">Curitiba - PR</option>
                <option value="ceara-ce">Fortaleza - CE</option>
                <option value="goias-go">Goiânia - GO</option>
                <option value="distrito-federal-df">Brasília - DF</option>
                <option value="rio-grande-do-sul-rs">Porto Alegre - RS</option>
                <option value="santa-catarina-sc">Blumenau - SC</option>
                </select>
                <button type="submit">Finalizar pedido!</button>
            </form>