<link rel="stylesheet" href="../style/views/home.css">
<link rel="stylesheet" href="../style/mobile.css">

<?php
    include "../config/errors.php";

    $title = "Home | Elian Alderuccio ";
    include "../templates/layout.php";
    include "../components/navbar.php";
?>

<div id="header" class="row mx-auto comparsa">
    <?php
        $page_name = "Elian Alderuccio";
        $desc = "Junior developer in Autentico Srl & Studente di ingegneria informatica";
        include "../components/header.php";
    ?>
</div>

<div id="main" class="row mx-auto main comparsa">
    <div class="row mx-auto">
        <img class = "mx-auto" id="image" src="../assets/images/mia.jpg">
    </div>
</div>

<div id="content" class="row mx-auto content comparsa">
    <p>
        La mia "carriera" da informatico inizia nel 2014 quando a 14 anni da poco compiuti ho assemblato il mio primo pc da gaming selezionando e comprando singolarmente i componenti online e guardando tutorial su youtube per capire come fare. 
    </p>
</div>

<div  id="link" class="row mx-auto link comparsa d-flex justify-content-center">
    <a name="connect" id="connect" class="btn btn-primary" href="contact.php" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
        </svg>
        Contact me
    </a>
</div>

<div id="progetti_evidenza" class="row mx-auto d-flex justify-content-center comparsa progetti_evidenza">
    <h5>Progetti in evidenza</h5>
    <!--
    <div class="row mx-auto project_content">
        <div class="col project_img">
            <img class="img-fluid" src="../assets/images/project.png">
        </div>

        <div class="col project_desc">
            <h6>Autentico NFC</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt magni dolores numquam velit placeat aspernatur modi sit</p>
        </div>
    </div>-->

    <div class="card mb-3" style="max-width: 540px; border-radius: 20px; margin-top: 20px">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-center">
                <img src="../assets/images/project.png" class="card-img">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Autentico NFC</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 540px; border-radius: 20px;">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-center">
                <img src="../assets/images/project.png" class="card-img">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Portfolio</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-auto link_projects">
        <a href="projects.php">Vedi gli altri...</a>
    </div>
</div>

<div id="lastest_blog" class="row mx-auto d-flex justify-content-center lastest_blog">
    <h5>Articoli del blog in evidenza</h5>

    <div class="card mb-3" style="max-width: 540px; border-radius: 20px; margin-top: 20px">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-center">
                <img src="../assets/images/project.png" class="card-img">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Autentico NFC</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 540px; border-radius: 20px;">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-center">
                <img src="../assets/images/project.png" class="card-img">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Portfolio</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-auto link_projects">
        <a href="blog.php">Vedi gli altri...</a>
    </div>
</div>



<?php
    include "../templates/close_layout.php";
?>