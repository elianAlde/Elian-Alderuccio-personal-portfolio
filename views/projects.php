<link rel="stylesheet" href="../style/views/projects.css">

<?php
    include "../config/errors.php";

    $title = "Projects | Elian Alderuccio ";
    include "../templates/layout.php";
    include "../components/navbar.php";
?>

<div class="row mx-auto header comparsa">
    <?php
        $page_name = "Projects";
        $desc = "Ho diviso i miei progetti in linguaggi, scegli quello di tuo interesse!";
        include "../components/header.php";
    ?>
</div>

<div class="row mx-auto content comparsa">
    <!-- Corpo della pagina home-->
    <div class="col d-flex justify-content-center align-items-center">
        <select id="select_projects" class="form-select" aria-label="Default select example">
            <option selected></option>
            <option>Autentico Srl Projects</option>
            <option>Web development</option>
            <option>C / C++</option>
            <option>Java & OOP</option>
            <option>Python</option>
        </select>
    </div>
</div>


<?php
    include "../templates/close_layout.html";
?>