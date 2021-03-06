<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no' name='viewport'>
    <title>AlifmaDev | <?= $title; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/node_modules/bootstrap-social/bootstrap-social.css" />
    <link rel='stylesheet' href='/stisla-master/assets/css/style.css'>
    <link rel='stylesheet' href='/stisla-master/assets/css/components.css'>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="icon" type="image/png" href="/favicon.ico" />
</head>

<body class="mx-0 my-0">
    <?= $this->include('layout/public-navbar'); ?>
    <div id='app' class="pt-5 mt-5">
        <section class='section'>
            <div class='container konten'>
                <?= $this->renderSection('content'); ?>
            </div>
        </section>
        <?= $this->include('layout/public-footer'); ?>

    </div>
    <!-- General JS Scripts -->


    <script src='https://code.jquery.com/jquery-3.3.1.min.js' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='/stisla-master/assets/js/stisla.js'></script>
    <script src='/stisla-master/assets/js/scripts.js'></script>
    <script src='/stisla-master/assets/js/custom.js'></script>

</body>

</html>