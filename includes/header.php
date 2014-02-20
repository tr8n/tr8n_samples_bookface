<?php require_once(__DIR__ . '/../vendor/tr8n/tr8n-client-sdk/library/Tr8n.php'); ?>
<?php tr8n_init_client_sdk("https://sandbox.tr8nhub.com", "1f113fe52e9a04173", "ea883d2d9bdae5f77"); ?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo tr8n_current_language()->locale; ?>"
      lang="<?php echo tr8n_current_language()->locale; ?>"
      dir="<?php echo tr8n_current_language()->direction(); ?>">

<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <?php include(__DIR__ . '/../vendor/tr8n/tr8n-client-sdk/library/Tr8n/Includes/Scripts.php'); ?>

    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>BookFace</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
