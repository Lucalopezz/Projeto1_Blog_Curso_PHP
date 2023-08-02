<?php 
    include_once('templates/header.php');
    //print_r($posts);
?>
<body>
    <main>
        <div id="titleContainer">
            <h1>Blog Codar</h1>
            <p>O seu blog de programação</p>
        </div>
        <div id="postsContainer">
            <?php foreach($posts as $post): ?>

                <div class="postBox">
                    <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="postTitle"> 
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h2>
                    <p class="postDesc"><?= $post['description'] ?></p>
                    <div class="tagsContainer">
                        <?php foreach($post['tags'] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </main>

<?php 
    include_once('templates/footer.php');
?>