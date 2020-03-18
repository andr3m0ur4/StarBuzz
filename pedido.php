<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>A Máquina de Grãos do StarBuzz</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site criado no curso de HTML com CSS" />
        <meta name="keywords" content="curso html css site café">
        <meta name="autor" content="André Moura">
        <link href="css/starbuzz.css" rel="stylesheet" type="text/css"/>
        <link href="css/styledform.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <header class="top">
            <img id="cabecalhoLogo" src="image/headerLogo.gif" alt="Imagem do Logo Cabeçalho do Café StarBuzz">
            <img id="cabecalhoSlogan" src="image/headerSlogan.gif" alt="Providenciando toda a cafeína que você precisa para energizar sua vida.">
        </header>

        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="#">INVENÇÕES</a></li>
                <li><a href="#">RECEITAS</a></li>
                <li><a href="#">LOCALIZAÇÕES</a></li>
                <li class="selecionado"><a href="formulario.html">MÁQUINA DE GRÃOS</a></li>
            </ul>
        </nav>

        <main id="tabelaConteiner">
            <div id="tabelaLinha">
                <section id="drinks">
                    <h1>BEBIDAS</h1>
                    <p>Mistura da Casa, R$1,49</p>
                    <p>Café Arábico com Leite, R$2,35</p>
                    <p>Cappuccino, R$1,89</p>
                    <p>Chá Chai, R$1,85</p>
                    <h1>ELIXIRES</h1>
                    <p>
                        Nós orgulhosamente servimos elixires comprados de
                        nossos amigos do Bar Use a Cabeça,
                    </p>
                    <p>Chá Verde Cooler, R$2,99</p>
                    <p>Framboesa Geladinha, R$2,99</p>
                    <p>Elixir da Felicidade, R$2,99</p>
                    <p>Explosão Anti-oxidante de Oxicoco, R$2,99</p>
                    <p>Chá de Resfriamento, R$2,99</p>
                    <p>Bebida Negra do Cérebro, R$2,99</p>
                </section>
                
                <section id="formulario">
        
                    <h1>A Máquina de Grãos do StarBuzz</h1>

                    <?php if (!$success) : ?>
                        <p>
                            <?php if (!empty($data['name'])) : ?>
                                Obrigado, <strong><?= $data['name'] ?></strong>, pelo seu pedido...
                            <?php else : ?>
                                Obrigado pelo seu pedido...
                            <?php endif; ?>

                            Porém, parece que você esqueceu de completar alguns itens no formulário. Como <span><?= $itens ?></span>. Você pode clicar no botão voltar e tentar novamente, caso contrário, seremos incapazes de realizar o seu pedido na Máquina de Grãos, e isso é triste.
                        </p>
                        <p>
                            Aqui está o que nós recebemos por enquanto:
                        </p>
                        <p>
                            <strong>Grãos:</strong> <?= $data['beans'] ?><br>
                            <strong>Tipo:</strong> <?= $data['beantype'] ?><br>
                            <strong>Extras:</strong> <?= $extras ?><br>
                            <strong>Nome:</strong> <?= $data['name'] ?><br>
                            <strong>Endereço:</strong> <?= $data['address'] ?><br>
                            <strong>Cidade:</strong> <?= $data['city'] ?><br>
                            <strong>Estado:</strong> <?= $data['state'] ?><br>
                            <strong>CEP:</strong> <?= $data['zip'] ?><br>
                            <strong>Telefone:</strong> <?= $data['phone'] ?><br>
                            <strong>Comentários:</strong> <?= $data['comments'] ?>
                        </p>

                    <?php else : ?>
                        <p>
                            Obrigado, <strong><?= $data['name'] ?></strong>, pelo seu pedido da Máquina de Grãos do StarBuzz.
                        </p>
                        <p>
                            Seu pedido, <?= $data['beans'] . ', ' . $data['beantype'] ?>, será enviado para:
                        </p>
                        <p>
                            <?= $data['name'] ?><br>
                            <?= $data['address'] ?><br>
                            <?= $data['city'] ?><br>
                            <?= $data['state'] . ', ' . $data['zip'] ?><br>
                            <?= $data['phone'] ?>
                        </p>

                        <?php if (!empty($data['comments'])) : ?>
                            <p>
                                Obrigado por enviar seus comentários ao StarBuzz! Nós amamos receber comentários de nossos usuários da Máquina de Grãos. Você disse,
                            </p>
                            <p style="margin-left: 40px">
                                <i><?= $data['comments'] ?></i>
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                </section>
                
            </div>
        </main>

        <footer>
            &copy; 2019 Café StarBuzz
            <br>
            Todas a marcas e marcas registradas que aparecem nesse site pertencem a seus
            respectivos proprietários.
        </footer>

    </body>
</html>