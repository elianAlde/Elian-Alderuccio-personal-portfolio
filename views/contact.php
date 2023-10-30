<link rel="stylesheet" href="../style/views/contact.css">

<?php
    include "../config/errors.php";

    $title = "Contact me | Elian Alderuccio ";
    include "../templates/layout.php";
    include "../components/navbar.html";
?>

<div class="row mx-auto header comparsa">
    <?php
        $page_name = "Contact me";
        $desc = "Se hai un progetto da propormi o vuoi solo vedere che combino, sei nel posto giusto!";
        include "../components/header.php";
    ?>
</div>

<div class="row mx-auto content comparsa">
    <div class="row d-flex justify-content-center">
        <h5>Vuoi vedere che combino?</h5>

        <div  id="link" class="row mx-auto link comparsa d-flex justify-content-center align-items-center">
            <a name="linkedin" class="btn btn-primary social" href="contact.php" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
                Linkedin
            </a>
            <a name="instagram" class="btn btn-primary social" href="contact.php" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
                Instagram
            </a>
            <a name="facebook" class="btn btn-primary social" href="contact.php" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
                Facebook
            </a>
            <a name="youtube" class="btn btn-primary social" href="contact.php" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
                Youtube
            </a>
            <a name="tiktok" class="btn btn-primary social" href="contact.php" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
                Tik tok
            </a>
        </div>
    </div>
    <!-- Corpo della pagina home-->
    <div id="form_project" class="row">
        <h5>Hai un progetto da propormi?</h5>
        
        <div id="form" class="col">
            <div class="mb-3 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        
    </div>
</div>



<?php
    include "../templates/close_layout.html";
?>