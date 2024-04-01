<!-- <!DOCTYPE html>
<html lang="en"> -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php
            if (isset($pageTitle)) {
                echo $pageTitle;
            } else {
                echo "Saunders Labs Portal";
            }
            ?>
        </title>

        <?php
        // Checking for refresh tag
        if(isset($refresh) && is_numeric($refresh)) {
            echo "<meta http-equiv='refresh' content='$refresh'>";
        }
        ?>

        <!-- jQuery -->
        <script src="<?php echo $_SERVER['ASSET_JQUERY_JS']; ?>"></script>

        <!-- Bootstrap -->
        <?php echo "<link rel='stylesheet' href='" . $_SERVER['ASSET_BOOTSTRAP_CSS'] . "'>"; ?>
        <script type="text/javascript" src="<?php echo $_SERVER['ASSET_BOOTSTRAP_JS']; ?>"></script>

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="<?php echo $_SERVER['ASSET_BOOTSTRAP_ICONS_CSS']; ?>">
        <link rel="stylesheet" href="/assets/styles.css">
        <script src="/assets/script.js"></script>
    </head>
    <body>
