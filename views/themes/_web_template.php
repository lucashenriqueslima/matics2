<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title><?= $title ?></title>




    <!-- Custom styles for this template-->
    <link href="<?=asset("css/sb-admin-2.css")?>" rel="stylesheet">
    <link href="<?=asset("css/load.css")?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div id="loader" class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carrengando...</div>
    </div>
</div>

<?php include($content); ?>
<script>
Object.defineProperty(window, "variavel", {
    value: "Hello Wolrd!"
  });
</script>

<script src="<?= asset("/js/jquery.js"); ?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?= flash() ?>
</body>

</html>