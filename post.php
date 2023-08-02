<?php 
    include_once('templates/header.php');

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
<body>
    <main id="postContainer">
        <div class="contentContainer">
            <h1 id="mainTitle"><?=$currentPost['title'] ?></h1>
            <p id="postDesc"><?=$currentPost['description'] ?></p>
            <div class="imgContainer">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?=$currentPost['title'] ?>">
            </div>
            <p class="postContent">
                 suscipit veritatis obcaecati libero reiciendis. Debitis eos tempore doloremque exercitationem voluptatibus veritatis architecto consequatur suscipit omnis? Repellat?
            Harum nam soluta nesciunt tempore molestiae temporibus doloribus, eveniet veniam! Suscipit atque dolore quod, explicabo optio tenetur eos vitae libero architecto? Id quibusdam odit repellat, blanditiis natus et dignissimos explicabo!
            Perspiciatis, nulla quos! Error pariatur dolores, officiis ad fuga enim esse sed tempore quaerat, iste beatae itaque ducimus alias aspernatur voluptates quis excepturi minima minus. Doloribus obcaecati quisquam beatae amet.
            Est maiores sint quibusdam. Aspernatur perferendis temporibus quos quae, fugiat tempore consequatur fuga at numquam dolorum, dignissimos vitae distinctio neque quasi molestiae placeat cupiditate magni natus vero ut tenetur odio.
            </p>
            <p class="postContent">
                tiae temporibus doloribus, eveniet veniam! Suscipit atque dolore quod, explicabo optio tenetur eos vitae libero architecto? Id quibusdam odit repellat, blanditiis natus et dignissimos explicabo!
            Perspiciatis, nulla quos! Error pariatur dolores, officiis ad fuga enim esse sed tempore quaerat, iste beatae itaque ducimus alias aspernatur voluptates quis excepturi minima minus. Doloribus obcaecati quisquam beatae amet.
            Est maiores sint quibusdam. Aspernatur perferendis temporibus quos quae, fugiat tempore consequatur fuga at numquam dolorum, dignissimos vitae distinctio neque quasi molestiae placeat cupiditate magni natus vero ut tenetur odio.</p>
            <p class="postContent">
                 eligendi accusamus voluptatum iste quos sequi est minus suscipit veritatis obcaecati libero reiciendis. Debitis eos tempore doloremque exercitationem voluptatibus veritatis architecto consequatur suscipit omnis? Repellat?
            Harum nam soluta nesciunt tempore molestiae temporibus doloribus, eveniet veniam! Suscipit atque dolore quod, explicabo optio tenetur eos vitae libero architecto? Id quibusdam odit repellat, blanditiis natus et dignissimos explicabo!
            Perspiciatis, nulla quos! Error pariatur dolores, officiis ad fuga enim esse sed tempore quaerat, iste beatae itaque ducimus alias aspernatur voluptates quis excepturi minima minus. Doloribus obcaecati quisquam beatae amet.
            Est maiores sint quibusdam. Aspernatur perferendis temporibus quos quae, fugiat tempore consequatur fuga at numquam dolorum, dignissimos vitae distinctio neque quasi molestiae placeat cupiditate magni natus vero ut tenetur odio.</p>
        </div>
        <aside id="navContainer">
            <h3 id="tagsTitle">Tags</h3>
            <ul id="tagList" >
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categiriesTitle">Categorias</h3>
            <ul id="categoriesList">
                <?php foreach($categories as $categoria): ?>
                    <li><a href="#"><?= $categoria ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
        
    </main>
   

<?php 
    include_once('templates/footer.php');
?>