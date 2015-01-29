<?php require_once(__DIR__ . '/../vendor/translationexchange/tml/library/tml.php'); ?>
<?php tml_init(); ?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
      lang="<?php echo tml_current_language()->locale; ?>"
      dir="<?php echo tml_current_language()->direction(); ?>">

<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <?php tml_scripts() ?>

    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>BookFace</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
