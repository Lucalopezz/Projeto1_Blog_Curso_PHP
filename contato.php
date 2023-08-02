<?php 
    include_once('templates/header.php');
?>
<body>
    <main id="contato">
        <div id="titleContainer">
            <h1>Entre em contato conosco</h1>
        </div>
        <div id="imgContato">
            <img src="<?= $BASE_URL ?>/img/contato.png" alt="Entre em contato">
        </div>
        <div id="contatoNumber">
            <ul>
                <li><i class="fa-solid fa-phone"></i> <span class="negrito">Telefone:</span> (99)999-9999</li>
                <li><i class="fa-solid fa-envelope"></i>  <span class="negrito">E-mail:</span> codar@email.com</li>
            </ul>
            <p>Exercitationem quidem unde numquam voluptates ex voluptatem repellat odit optio molestiae, </p>
            <p>excepturi assumenda possimus itaque neque.</p>
        </div>
    </main>


<?php 
    include_once('templates/footer.php');
?>