<?php require 'incs/header.php' ?>

    <main class="main pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $post['title']?></h1>
                    <?= $post['content']?>
                </div>
            </div>
        </div>
    </main>
<?php require 'incs/footer.php' ?>