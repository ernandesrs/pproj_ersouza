<?php

require __DIR__ . "/app/config.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= get_site_name() ?> - Desenvolvedor web
    </title>

    <link rel="stylesheet" href="<?= get_site_asset_url("/css/icons.css") ?>">
    <link rel="stylesheet" href="<?= get_site_asset_url("/css/styles.css") ?>">
    <link rel="shortcut icon" href="<?= get_site_favicon() ?>"
        type="image/x-icon">
</head>

<body>
    <div class="top-background"></div>

    <!-- header -->
    <header class="d-flex align-items-center header">
        <div class="container">
            <nav class="d-flex align-items-center">
                <a class="logo" href="<?= get_site_url() ?>">
                    <img class="img-fluid" src="<?= get_site_logo() ?>"
                        alt="<?= get_site_name() ?> LOGO">
                </a>

                <ul class="ms-auto nav">
                    <?php foreach (get_site_header_nav() as $nav): ?>
                        <li class="nav-item">
                            <a href="<?= $nav["url"] ?>"
                                class="nav-link <?= $nav["contrast"] ?? false ? "btn btn-primary" : "" ?>">
                                <i class="icon <?= $nav["icon"] ?>"></i> <span class="text">
                                    <?= $nav["text"] ?>
                                </span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <button
                    class="btn toggler px-0 text-light-light fs-4 ms-auto d-lg-none bg-transparent">
                    <i class="bi bi-list"></i>
                </button>
            </nav>
        </div>
    </header>
    <!-- /header -->