    <footer>
        <div class="container">
            <div class="row pb-4 pt-4 border-bottom">
                <div class="col-6">
                    <h1>Vamos conversar sobre o seu projeto?</h1>
                </div>
                <div class="col-6 justify-content-end d-flex align-items-center">
                    <a href="<?php echo "href='" . get_home_url() . "/contactos'" ?>"><button type="button" class="btn btn-primary rounded-0">Pedir proposta</button></a>
                </div>
            </div>
        </div>
        <div class="container pb-5 pt-5">
            <div class="row">
                <div class="col-5">
                    <b>Ligue-nos</b>
                    <p class="pt-3 m-0"><a href="tel:+351 914 271 971" class="text-decoration-none">+351 914 271 971</a></p>
                    <p class="pt-3">
                        <img class="whats-app-logo" <?php echo "src='" . get_template_directory_uri() . "/assets/img/WhatsAppLogo.svg'" ?> alt="Ligue-nos no WhatsApp">
                    </p>
                </div>
                <div class="col-5">
                    <b>Envie-nos um e-mail</b>
                    <p class="pt-3 m-0"><a href="mailto:info@basicamente.pt" class="text-decoration-none">info@basicamente.pt</a></p>
                    <p class="pt-3">
                        <img class="messenger-logo" <?php echo "src='" . get_template_directory_uri() . "/assets/img/MESSENGER.svg'" ?> alt="Envie-nos uma mensagem">
                    </p>
                </div>
                <div class="col-2">
                    <b>Fique Ligado</b>
                    <div class="social-links pt-3">
                        <a href="https://www.facebook.com/basicamentedigital/" class="fa fa-facebook-f fa-xs" target="_blank"></a>
                        <a href="https://www.instagram.com/basicamente.digital/" class="fa fa-instagram fa-xs" target="_blank"></a>
                        <a href="https://pt.linkedin.com/company/basicamente" class="fa fa-linkedin fa-xs" target="_blank"></a>
                    </div>
                </div>
            </div>
            <div class="row pt-4 info">
                <div class="col-5">
                    <b>Porto</b>
                    <p class="p-0 m-0">Avenida 1?? de Maio,</p>
                    <p class="p-0 m-0">Ed. Carvalhido, Ent. 3 - 7?? Piso</p>
                    <p class="p-0 m-0">4600-013 Amarante - Porto</p>
                    <p class="p-0 m-0">Portugal</p>
                </div>
                <div class="col-5">
                    <b>Informa????es Legais</b>
                    <p class="p-0 m-0">
                        <a <?php echo "href='" . get_home_url() . "/resolucao-de-litigios'" ?>>Resolu????o de Lit??gios</a>
                    </p>
                    <p class="p-0 m-0">
                        <a <?php echo "href='" . get_home_url() . "/termos-e-condicoes'" ?>>Termos e Condi????es</a>
                    </p>
                    <p class="p-0 m-0">
                        <a href="https://www.livroreclamacoes.pt">Livro de reclama????es</a>
                    </p>
                </div>
                <div class="col-2 copy">
                    <p><a <?php echo "href='" . get_home_url() . "'" ?>>BASICAMENTE</a> ?? 2014-2021</p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>