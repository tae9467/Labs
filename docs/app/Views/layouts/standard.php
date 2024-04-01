<html>
<head>
    <title><?= $this->renderSection("title"); ?></title>

    <!-- jQuery -->
    <script src="/assets/jquery/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/bootstrap/5.0.1/css/bootstrap.css">
    <script type="text/javascript" src="/assets/bootstrap/5.0.1/js/bootstrap.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="/assets/datatables/datatables.min.css"/>
    <script type="text/javascript" src="/assets/datatables/datatables.min.js"></script>
</head>
<body>
<?php
if ($_SERVER['CI_ENVIRONMENT'] == "development") {
    echo "<div class='alert alert-danger' role='alert' align='center'>";
    echo "*** Development Environment ***";
    echo "<br />";
    echo "Host: " . $_SERVER['HTTP_HOST'];
    echo "</div>";
}
?>
<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Portal Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <?= $this->renderSection("content"); ?>
</div>
</body>

</html>