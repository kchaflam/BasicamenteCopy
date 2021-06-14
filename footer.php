    <footer>
        <div class="container">
            <div class="row pb-4 pt-4 border-bottom">
                <div class="col-6">
                    <h1>Vamos conversar sobre o seu projeto?</h1>
                </div>
                <div class="col-6 justify-content-end d-flex align-items-center">
                    <button type="button" class="btn btn-primary rounded-0">Pedir proposta</button>
                </div>
            </div>
        </div>
        <div class="container pb-5 pt-5">
            <div class="row">
                <div class="col-5">
                    <b>Ligue-nos</b>
                    <p class="pt-3 m-0">+351 914 271 971</p>
                    <p class="pt-3">
                        <img class="whats-app-logo" <?php echo "src='" . get_template_directory_uri() . "/assets/img/WhatsAppLogo.svg'" ?> alt="Ligue-nos no WhatsApp">
                    </p>
                </div>
                <div class="col-5">
                    <b>Envie-nos um e-mail</b>
                    <p class="pt-3 m-0">info@basicamente.pt</p>
                    <p class="pt-3">
                        <img class="messenger-logo" <?php echo "src='" . get_template_directory_uri() . "/assets/img/MESSENGER.svg'" ?> alt="Envie-nos uma mensagem">
                    </p>
                </div>
                <div class="col-2">
                    <b>Fique Ligado</b>
                    <div class="social-links pt-3">
                        <a href="https://www.facebook.com/basicamentedigital/" class="fab fa-facebook-f fa-xs" target="_blank"></a>
                        <a href="https://www.instagram.com/basicamente.digital/" class="fab fa-instagram fa-xs" target="_blank"></a>
                        <a href="https://pt.linkedin.com/company/basicamente" class="fab fa-linkedin fa-xs" target="_blank"></a>
                    </div>
                </div>
            </div>
            <div class="row pt-4 info">
                <div class="col-5">
                    <b>Porto</b>
                    <p class="p-0 m-0">Avenida 1º de Maio,</p>
                    <p class="p-0 m-0">Ed. Carvalhido, Ent. 3 - 7º Piso</p>
                    <p class="p-0 m-0">4600-013 Amarante - Porto</p>
                    <p class="p-0 m-0">Portugal</p>
                </div>
                <div class="col-5">
                    <b>Informações Legais</b>
                    <p class="p-0 m-0">
                        <a <?php echo "href='" . get_home_url() . "/resolucao-de-litigios'" ?>>Resolução de Litígios</a>
                    </p>
                    <p class="p-0 m-0">
                        <a <?php echo "href='" . get_home_url() . "/termos-e-condicoes'" ?>>Termos e Condições</a>
                    </p>
                    <p class="p-0 m-0">
                        <a href="https://www.livroreclamacoes.pt">Livro de reclamações</a>
                    </p>
                </div>
                <div class="col-2 copy">
                    <p><a <?php echo "href='" . get_home_url() . "'" ?>>BASICAMENTE</a> © 2014-2021</p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>