<?php 
    include_once('templates/header.php');
?>
<body>
    <div id="categoriasContainer">

    <?php foreach($categories as $categoria): ?>
            <li><a href="#"><?= $categoria ?></a></li>
    <?php endforeach; ?>
    </div>


<?php 
    include_once('templates/footer.php');
?>