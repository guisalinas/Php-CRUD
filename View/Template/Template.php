<?php include_once 'Header.php'; ?>

    <section class="central">
        <div class="container spaces ">
            <div class="row">
                <col-2></col-2>
                <col-8>
                    <?php
                    $controller = new PageController();
                    $controller->getPage();
                    ?>
                </col-8>
                <col-2></col-2>
            </div>
        </div>
    </section>

<?php include_once 'Footer.php'; ?>