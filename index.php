<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- CSS -->
    <link href="assets/css/style_index.css" rel="stylesheet">
    <title>Portfolio</title>
</head>
    <body>
        <?php     
        require('./database/connexion_bdd.php');
        
        include('assets/php/function.php');
        ?>
        <!-- NAVBAR -->
        <div id="accueil" class="nav_style">
            <nav class="navbar fixed-top">
                <div id="home" class="brand-title">Portfolio</div>
                    <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    </a>
                <div class="navbar-links">
                    <ul class="nav-text">
                        <li id="Accueil"><a href=""></a></li>
                        <li><a href="#presentat">Ma présentation</a></li>
                        <li><a href="#service">Mon Parcours</a></li>
                        <li><a href="#trav">Mes Travaux</a></li>
                        <li><a href="admin_connect.php">Espace Administrateur</a></li>
                        <div class="theme-switch-wrapper">    
                            <center>
                                <label class="theme-switch" for="checkbox">                               
                                <input type="checkbox" id="checkbox" />
                                    <div class="slider">
                                        <svgOfSun />
                                        <svgOfMoon />
                                    </div>
                                </label>
                            </center>                           
                        </div>  
                    </ul>
                </div>
            </nav>
        </div>
        <!-- CAROUSEL -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/MA PRésentation.jpg" width="100%" height="600px" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                    <img src="./img/mon parcours.jpg" width="100%" height="600px" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                    <img src="./img/mes travaux.jpg" width="100%" height="600px" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
        <!-- DIV PRESENTATION -->
        <div class="parax">
            <section id="presentat">
                <h1 class="headings">MA PRESENTATION</h1>
                <div id="presentat" class="container">
                    <div class="row align-items-start">              
                        <div class="col-md-4">
                            <?php 
                                foreach ($list_img as $value) {
                                    print '<div class="">';
                                        print '<div class="" >';
                                            print '<img src="img/'.$value['name'].'" class="card-img-top col-md-9" alt="...">';
                                            print '<div class="">';
                                                print '<h5 class="text-card card-title">';
                                                    print $value['description'];
                                                print '</h5>';
                                            print '</div>';
                                        print '</div>';   
                                    print '</div>';                           
                                }
                            ?>
                        </div>
                        <div class="col"">
                                <p>
                                    What is Lorem Ipsum?
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                    Why do we use it?
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- SECTION COMPETENCES -->
        <section id="portfolio">
            <div style="color: white;" class="headings">COMPETENCES ACQUISES</div>
                <div class="gallery">
                    <figure class="snip1487">   
                        <img src="./img/logo-2582748_640.png" height="1000px" alt="">
                        <figcaption>
                            <h3>HTML</h3>
                            <h2>70%</h2>
                        </figcaption>
                    </figure>
                    <figure class="snip1487">    
                        <img src="./img/logo-2582747_1280.png" height="250px" alt="">
                        <figcaption>
                            <h3>CSS</h3>
                            <h2>70%</h2>
                        </figcaption>
                    </figure>
                    <figure class="snip1487">      
                        <img src="./img/js.png" height="250px"  alt="">
                        <figcaption>
                            <h3>JAVASCRIPT</h3>
                            <h2>60%</h2>
                        </figcaption>
                    </figure>
                    <figure class="snip1487">   
                        <img src="./img/phppp.png" height="250px" alt="">
                        <figcaption>
                            <h3>PHP</h3>
                            <h2>55%</h2>                    
                        </figcaption>
                    </figure>
                    <figure class="snip1487">    
                        <img src="./img/sqll.png" height="250px" alt="">
                        <figcaption>
                            <h3>SQL</h3>
                            <h2>45%</h2>
                        </figcaption>
                    </figure>         
                </div>
        </section>
        <!-- SECTION PARCOURS -->
        <section id="services">
            <h1 id="service" class="headings">MON PARCOURS</h1>
            <div class="ro">
                <div class="box">
                    <h1 class="headings">Mon Parcours Scolaire</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
               </div>
                <div class="box">
                    <h1 class="headings">Formation Militaire</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                </div>
                <div class="box">
                    <h1 class="headings">Vie Active</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </section>
        <!-- SECTION TRAVAUX -->
        <section id="portfolio">
            <div id="trav" style="color: white;" class="headings">MES TRAVAUX</div>
                <section id="travaux">
                <h1 class="headings"></h1>        
                    <div class="row">
                        <div class="col-12">           
                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                            <br>
                            Where does it come from?
                        </div>
                        <div><a href="admin_connect.php">PANNEL ADMINISTRATEUR</a></div>
                        <div class="row">
                            <label>
                                <u>
                                    <b>LISTE DES PROJETS</b>
                                </u>
                            </label>
                            <?php
                                // CONDITIONS \\
                                // Afficher la liste des liens
                                //si $res_listlink contient au moins une données
                                if ($res_listlink->num_rows > 0) {
                                //faire ceci
                                echo "<table>";
                                    echo "<th>";
                                        echo "Nom du projet";
                                    echo "</th>";
                                    echo "<th>";
                                        echo "Liens du Github";
                                    echo "</th>";
                                    echo "<th>";
                                        echo "Liens du Site";
                                    echo "</th>";
                                    foreach ($res_listlink as $valeur) { //Boucle : Pour chaque resultat 
                                    if (($etat == "ouvrir") && ($id_click == $valeur['id'])) {
                                        echo '<form action="index.php" method="post">';
                                            echo "<input type='hidden' name='id_link' value=" . $valeur['id'] . ">";
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo "<input type='text' name='new_nom'  value='" . $valeur['nom'] . "'>";
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo "<input type='text' name='new_git'  value='" . $valeur['git'] . "'>";
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo "<input type='text' name='new_site'  value='" . $valeur['site'] . "'>";
                                                    echo "</td>";
                                                echo "<tr>";
                                        echo '</form>';
                                        // -------------------------------------------------------
                                    } else {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $valeur['nom'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo "<a href='" . $valeur['git'] . "'>" . $valeur['git'] . "</a>";
                                            echo "</td>";
                                            echo "<td>";
                                                echo "<a href='" . $valeur['site'] . "'>" . $valeur['site'] . "</a>";
                                            echo "</td>";
                                        echo "</tr>";                
                                    }
                                }
                                echo "</table>";
                            }
                            else { //sinon                               
                            }
                            ?>
                        </div>    
                    </div>
                </section>    
        </section>
        <!-- FOOTER -->
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class=""></div>
                        <div class="col-md-5 col-md-3 item">
                            <h3><a href="admin_connect.php">Pannel Administrateur</a></h3>
                        </div>
                        <div class="col-md-3 col-md-3 item">
                            <h3>Portfolio</h3>
                            <ul>
                                <li><a href="#accueil">Accueil</a></li>
                                <li><a href="#presentat">Présentation</a></li>
                                <li><a href="#service">Parcours</a></li>
                                <li><a href="#trav">Travaux</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 item text">
                            <h3>Coordonnées</h3>
                            <h6>E-mail:faatauismael83@gmail.com</h6>
                            <h6>PAPARA ,PK29.500 c/mer Quartier MAHANA</h6>
                        </div>
                    </div>
                    <h6 class="copyright">Créé par FAATAU-U Teheetua © 2021</h6>
                </div>
            </footer>
        </div>
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        <script src="assets/js/javasa.js"></script>
        <script src="assets/js/script.js"></script>
    </body>

</html>