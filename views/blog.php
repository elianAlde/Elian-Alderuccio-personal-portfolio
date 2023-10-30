<link rel="stylesheet" href="../style/views/blog.css">
<link rel="stylesheet" href="../style/mobile.css">

<?php
    include "../config/errors.php";

    $title = "Blog | Elian Alderuccio ";
    include "../templates/layout.php";
    include "../components/navbar.html";
?>

    <div class="row mx-auto header comparsa">
        <?php
            $page_name = "Blog";
            $desc = "Non ho molto da dire, ma mi piace dare una forma concreta ai miei pensieri";
            include "../components/header.php";
        ?>
    </div>

    <div class="row mx-auto content comparsa">
        <!-- Corpo della pagina home-->
    </div>



<?php
    include "../templates/close_layout.html";
?>