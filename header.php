<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navigation" aria-controls="Navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="col-md-3" id="logo">
                <a class="navbar-brand" <?php echo "href='" . get_home_url() . "'" ?>>
                    <img width="160" <?php echo "src='" . get_template_directory_uri() . "/assets/img/basicamente_logo.svg'" ?> alt="Basicamente">
                </a>
            </div>

            <div class="col-md-6 collapse navbar-collapse" id="Navigation">
                <ul class="nav col-12 mb-2 justify-content-center mb-md-0">
                    <?php wp_list_pages("title_li="); ?>
                </ul>
            </div>

            <div class="col-md-3 text-end d-none d-md-block">
                <button type="button" class="btn btn-primary rounded-0">Começar Agora</button>
            </div>
        </div>
    </nav>