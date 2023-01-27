<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="d-flex justify-content-center text-center py-5">
            <small>
                <p class="mb-0">
                    <a href="<?= get_site_url() ?>" title="Página Inicial"><?=
                          get_site_name() ?></a> ©
                    <?= date("Y") ?> - Todos os direitos reservados
                </p>
                <p class="mb-0">
                    <span>
                        <a href="<?= get_site_url("/privacy-terms.php") ?>"
                            title="Termos de privacidade">
                            Termos de privacidade
                        </a>
                    </span>
                </p>
            </small>
        </div>
    </div>
</footer>
<!-- /footer -->

<script src="<?= get_site_asset_url("/js/scripts.js") ?>"></script>
<script>
    AOS.init();
</script>
</body>

</html>