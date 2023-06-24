<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;

            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?=$currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $URL_ATUAL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique eligendi placeat, pariatur minus at voluptatibus dolorem soluta dolor nulla ducimus atque repudiandae fugit impedit tempore consequatur voluptas rerum officiis asperiores.
            Beatae laborum tempore id nesciunt sed exercitationem quas atque placeat hic architecto a iusto alias, sunt blanditiis possimus est aspernatur asperiores! Quas dolorum ratione architecto ea in eveniet veritatis natus?
            Qui accusantium consequuntur nam aliquid, corrupti nostrum! Quia unde nobis impedit dolore maxime aliquam, nesciunt corrupti. Distinctio animi alias placeat perspiciatis. Aperiam consequatur reprehenderit provident quis eum molestiae, recusandae ducimus!
            Eaque, eligendi ut est at corrupti quis quae itaque totam. Sed amet, reprehenderit ullam quaerat quia eos aliquid dolore, consequatur quis labore iure magni distinctio voluptatum facere veniam aliquam voluptatibus.
            Soluta nulla quod minus aspernatur eos atque ad nemo aut, consectetur expedita culpa modi laudantium aperiam officia dignissimos animi accusantium inventore beatae error nihil omnis ex sunt. Soluta, fugiat laudantium.</p>
            <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique eligendi placeat, pariatur minus at voluptatibus dolorem soluta dolor nulla ducimus atque repudiandae fugit impedit tempore consequatur voluptas rerum officiis asperiores.
            Beatae laborum tempore id nesciunt sed exercitationem quas atque placeat hic architecto a iusto alias, sunt blanditiis possimus est aspernatur asperiores! Quas dolorum ratione architecto ea in eveniet veritatis natus?
            Qui accusantium consequuntur nam aliquid, corrupti nostrum! Quia unde nobis impedit dolore maxime aliquam, nesciunt corrupti. Distinctio animi alias placeat perspiciatis. Aperiam consequatur reprehenderit provident quis eum molestiae, recusandae ducimus!
            Eaque, eligendi ut est at corrupti quis quae itaque totam. Sed amet, reprehenderit ullam quaerat quia eos aliquid dolore, consequatur quis labore iure magni distinctio voluptatum facere veniam aliquam voluptatibus.
            Soluta nulla quod minus aspernatur eos atque ad nemo aut, consectetur expedita culpa modi laudantium aperiam officia dignissimos animi accusantium inventore beatae error nihil omnis ex sunt. Soluta, fugiat laudantium.</p>

        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li> <a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>

    </main>
   
<?php
    include_once("templates/footer.php");
?>