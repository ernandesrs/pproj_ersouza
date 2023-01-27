<?php

include __DIR__ . "/header.php";

$banner = get_site_page_data("home.banner");
$skills = get_site_page_data("home.skills");
$portfolio = get_site_page_data("home.portfolio");
$contact = get_site_page_data("home.contact");

?>

<main class="main">
    <!-- banner -->
    <section class="section section-banner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 px-5 order-lg-5 pe-lg-2">
                    <img class="img-fluid" data-aos="zoom-out" data-aos-duration="750"
                        src="<?= $banner["image"] ?>" alt="<?= $banner["title"] ?>">
                </div>

                <div class="col-12 col-lg-6 text-center text-lg-start ps-lg-2">
                    <h1 class="section-title" data-aos="zoom-out">
                        <?= $banner["title"] ?>
                    </h1>
                    <p class="py-3 banner-desc" data-aos="zoom-out" data-aos-delay="125">
                        <?= $banner["desc"] ?>
                    </p>
                    <div data-aos="fade-up">
                        <?php foreach ($banner["buttons"] as $button): ?>
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
    <!-- /banner -->

    <!-- skills -->
    <section class="section section-skills" id="skills">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row pb-3 mb-md-4">
                        <div
                            class="col-12 col-md-11 col-lg-10 col-xl-8 text-center text-md-start">
                            <h1 class="section-title typing pe-5 pe-xl-4">
                                <?= $skills["title"] ?>
                            </h1>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <?php foreach ($skills["skills"] as $key => $skill): ?>
                            <div class="col-10 col-sm-6 col-lg-4 mb-4" data-aos="zoom-out-up"
                                data-aos-delay="<?= $key * 125 ?>"
                                data-aos-duration="<?= $key * 500 ?>">
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
    <section class="section section-portfolio" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-md-end pb-3 mb-md-4">
                        <div
                            class="col-12 col-md-11 col-lg-10 col-xl-6 text-center text-md-end">
                            <h1 class="section-title typing ps-5 ps-xl-4">
                                <?= $portfolio["title"] ?>
                            </h1>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <?php foreach ($portfolio["jobs"] as $job): ?>
                            <div class="col-10 col-sm-6 col-lg-4 mb-3" data-aos="zoom-in-up"
                                data-aos-delay="<?= $key * 125 ?>"
                                data-aos-duration="<?= $key * 350 ?>">
                                <div class="card card-body h-100 job-box">
                                    <div class="job-image-box">
                                        <img class="img-fluid" src="<?= $job["image"] ?>"
                                            alt="<?= $job["title"] ?> Image">

                                        <div class="py-2 job-links">
                                            <?php if ($url = $job["preview_url"]): ?>
                                                <a class="btn btn-sm btn-primary-light"
                                                    href="<?= $url ?>" title="Previsualizar"
                                                    target="_blank">
                                                    <i class="bi bi-eye-fill"></i>
                                                    <span class="text">Preview</span>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($url = $job["source_url"]): ?>
                                                <a class="btn btn-sm btn-primary-light"
                                                    href="<?= $url ?>" title="Código fonte"
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

    <!-- contact -->
    <section class="section section-contact" id="contact">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-10 col-md-8 col-lg-5 text-center">
                    <h1 class="section-title typing">
                        <?= $contact["title"] ?>
                    </h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-xl-7">
                    <div class="card card-body contacts-box">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4 mb-md-0">
                                <div class="card card-body bg-transparent">
                                    <p class="fs-6">
                                        Me encontre nestas redes sociais ou via e-mail.
                                    </p>
                                    <ul class="nav profiles flex-column">
                                        <?php foreach ($contact["profiles"] as $profile): ?>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="<?= $profile["url"] ?>"
                                                    title="<?= $profile["title"] ?>"
                                                    target="_blank">
                                                    <i
                                                        class="icon <?= $profile["icon"] ?>"></i>
                                                    <span class="text">
                                                        <?= $profile["text"] ?>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card card-body bg-transparent">
                                    <p class="fs-6">
                                        Também estou nestas plataformas freelancer.
                                    </p>
                                    <ul class="nav freelance flex-column">
                                        <?php foreach ($contact["freelance"] as $freelance): ?>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="<?= $freelance["url"] ?>"
                                                    title="<?= $freelance["title"] ?>"
                                                    target="_blank">
                                                    <i
                                                        class="icon bi bi-arrow-up-right-square-fill"></i>
                                                    <span class="text">
                                                        <?= $freelance["text"] ?>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /contatct -->
</main>

<?php

include __DIR__ . "/footer.php";

?>