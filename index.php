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
    <link rel="shortcut icon" href="<?= CONF_APP_ASSETS_URL ?>/img/favicon.png"
        type="image/x-icon">
</head>

<body>

    <!-- header/banner -->
    <section class="section section-top">
        <header class="d-flex align-items-center header">
            <div class="container">
                <nav class="d-flex align-items-center">
                    <a class="logo" href="">
                        <img class="img-fluid"
                            src="<?= CONF_APP_ASSETS_URL ?>/img/logo.png"
                            alt="ERSOUZA LOGO">
                    </a>

                    <ul class="ms-auto nav flex-row d-none d-lg-flex">
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

                    <button
                        class="btn px-0 text-light-light fs-4 ms-auto d-lg-none bg-transparent">
                        <i class="bi bi-list"></i>
                    </button>
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
                    <h1 class="section-title typing">
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row pb-3 mb-md-4">
                        <div
                            class="col-12 col-md-11 col-lg-10 col-xl-8 text-center text-md-start">
                            <h1 class="section-title typing pe-5 pe-xl-4">
                                <?= CONF_APP_DATA["skills"]["title"] ?>
                            </h1>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <?php foreach (CONF_APP_DATA["skills"]["skills"] as $skill): ?>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <div class="card card-body h-100 skill-box">
                                    <div class="skill-icon-box">
                                        <i class="icon <?= $skill["icon"] ?>"></i>
                                    </div>
                                    <div class="skill-content">
                                        <h2 class="skill-title">
                                            <?= $skill["title"] ?>
                                        </h2>
                                        <p class="skill-desc">
                                            <?= $skill["desc"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /skills -->

    <!-- portfolio -->
    <section class="section section-portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-md-end pb-3 mb-md-4">
                        <div
                            class="col-12 col-md-11 col-lg-10 col-xl-6 text-center text-md-end">
                            <h1 class="section-title typing ps-5 ps-xl-4">
                                <?= CONF_APP_DATA["portfolio"]["title"] ?>
                            </h1>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <?php foreach (CONF_APP_DATA["portfolio"]["jobs"] as $job): ?>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <div class="card card-body h-100 job-box">
                                    <div class="job-image-box">
                                        <img class="img-fluid" src="<?= $job["image"] ?>"
                                            alt="<?= $job["title"] ?> Image">

                                        <div class="py-2 job-links">
                                            <?php if ($url = $job["preview_url"]): ?>
                                                <a href="<?= $url ?>" title="Previsualizar"
                                                    target="_blank">
                                                    <i class="bi bi-eye-fill"></i>
                                                    <span class="text">Preview</span>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($url = $job["source_url"]): ?>
                                                <a href="<?= $url ?>" title="Código fonte"
                                                    target="_blank">
                                                    <i class="bi bi-github"></i>
                                                    <span class="text">Fonte</span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="job-content">
                                        <h2 class="job-title">
                                            <?= $job["title"] ?>
                                        </h2>
                                        <p class="job-desc">
                                            <?= $job["desc"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /portfolio -->

    <script src="<?= CONF_APP_ASSETS_URL ?>/js/scripts.js"></script>
</body>

</html>