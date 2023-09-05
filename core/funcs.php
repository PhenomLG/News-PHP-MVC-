<?php


function dump($data): void{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data): void{
    dump($data);
    die;
}

function abort($code = 404){
    http_response_code(404);
    require VIEWS . "/errors/{$code}.tpl.php";
    die();
}

function renderErrorHtml(string $err){
    ?>
    <main class="main pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><?php echo($err)?></h3>
                </div>
            </div>
        </div>
    </main>
    <?php
}