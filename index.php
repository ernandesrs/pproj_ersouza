<?php

require __DIR__ . "/app/config.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERSOUZA - Desenvolvedor web</title>

    <link rel="stylesheet" href="<?= CONF_APP_ASSETS_URL ?>/css/icons.css">
    <link rel="stylesheet" href="<?= CONF_APP_ASSETS_URL ?>/css/styles.css">
    <link rel="shortcut icon" href="<?= CONF_APP_ASSETS_URL ?>/img/favicon.png" type="image/x-icon">
</head>

<body>

    <!-- header/banner -->
    <section class="section section-top">
        <header class="d-flex align-items-center header">
            <div class="container">
                <nav class="d-flex align-items-center">
                    <a class="logo" href="">
                        <img class="img-fluid" src="<?= CONF_APP_ASSETS_URL ?>/img/logo.png" alt="ERSOUZA LOGO">
                    </a>

                    <ul class="ms-auto nav flex-row">
                        <?php foreach (CONF_APP_DATA["header"]["nav"] ?? [] as $nav): ?>
                            <li class="nav-item">
                                <a href="<?= $nav["url"] ?>"
                                    class="nav-link <?= $nav["contrast"] ?? false ? "btn btn-primary" : "" ?>">
                                    <i class="icon <?= $nav["icon"] ?>"></i> <span
                                        class="text">
                                        <?= $nav["text"] ?>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="container banner">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 px-5 order-lg-5 pe-lg-2">
                    <img class="img-fluid" src="<?= CONF_APP_DATA["banner"]["image"] ?>"
                        alt="<?= CONF_APP_DATA["banner"]["title"] ?>">
                </div>

                <div class="col-12 col-lg-6 text-center text-lg-start ps-lg-2">
                    <h1 class="section-title">
                        <?= CONF_APP_DATA["banner"]["title"] ?>
                    </h1>
                    <p class="py-3 banner-desc">
                        <?= CONF_APP_DATA["banner"]["desc"] ?>
                    </p>
                    <div>
                        <?php foreach (CONF_APP_DATA["banner"]["buttons"] as $button): ?>
                            <a class="btn btn-<?=($button["contrast"] ?? false) ? "primary" : "outline-primary" ?> mx-1 mb-2"
                                href="<?= $button["url"] ?>" title="<?= $button["title"] ?>">
                                <i class="icon <?= $button["icon"] ?>"></i> <span
                                    class="text">
                                    <?= $button["text"] ?>
                                </span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /header/banner -->

    <!-- skills -->
    <section class="section section-skills">
    </section>
    <!-- /skills -->

    <script src="<?= CONF_APP_ASSETS_URL ?>/js/scripts.js"></script>
</body>

</html>