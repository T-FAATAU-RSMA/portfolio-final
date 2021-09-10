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
        <link href="./assets/css/style.css" rel="stylesheet">
		<!-- TITRE -->
        <title>Panneau administrateur</title>
	</head>	
    <body>      
        <?php

            require('./database/connexion_bdd.php');
            
            include('assets/php/function.php');
        ?>
        <div class="">
            <div class="">
                <nav class="navbar">
                    <div class="brand-title"><a href="index.php">Portfolio</a></div>
                        <a href="#" class="toggle-button">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        </a>
                    <div class="navbar-links">
                    <ul>
                        <li><a href="index.php#accueil">Ma présentation</a></li>
                        <li><a href="index.php#service">Mon Parcours</a></li>
                        <li><a href="index.php#trav">Mes Travaux</a></li>
                        <li><a href="index.php">Retour à l'accueil</a></li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div id="wrapper" class="col-md-12">
                    <h1 class="col-md-6">
                        <span class="letter01">A</span>
                        <span class="letter02">D</span>
                        <span class="letter03">M</span>
                        <span class="letter04">I</span>
                        <span class="letter05">N</span>
                        <span class="letter06"></span>
                        <span class="letter07">&nbsp;</span>
                        <span class="letter08">S</span>
                        <span class="letter09">P</span>
                        <span class="letter10">A</span>
                        <span class="letter11">C</span>
                        <span class="letter12">E</span>
                        <span class="letter13"></span>
                        <!-- <span class="letter14"></span>
                        <span class="letter15"></span>
                        <span class="letter16"></span> -->
                    </h1>
                </div>
            </div>    
        </div>
        <div class="container">
            <div class="content_center row">
                <div class="col-md-9">               
                    <div class="card">
                        <div class="card-body">
                            <center>
                            <h2>
                                Importer une Image
                            </h2>                                             
                            </center>
                            <br>
                            <!--  SYSTEMES D'IMPORT D'IMAGES  -->
                            <form enctype="multipart/form-data" action="index.php" method="post">
                                <div class="form-group">
                                <input type="text" class="form-control" name="p_description" aria-describedby="helpId" placeholder="Description">
                                </div>
                                <br>
                                <div class="input-group">
                                    <input name="img" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Importer">
                                    <button class="btn btn-outline-info" type="submit" id="inputGroupFileAddon04">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
            <br>
            <div class="content_center row">
                <div class="col-md-6">   
                    <label>
                        <u>
                            <b>
                                CREER UN PROJET
                            </b>
                        </u>
                    </label>
                    <br>
                    <?php
                        // <!-- CREER UN LIVRE  -->
                        echo '<form  method="POST" action="index_admin.php">';
                            echo '<u>';
                                echo '<p>';
                                    echo 'Ajouter un projet:';
                                echo '</p>';
                            echo '</u>';
                            echo '<p>';
                                echo '<input type="text" name="nom" placeholder="Nom du projet">';
                            echo '</p>';
                            echo '<p>';
                                echo '<input type="text" name="git" placeholder="liens Github">';
                            echo '</p>';
                            echo '<p>';
                                echo '<input type="text" name="site" placeholder="liens du site Hébergé">';
                            echo '</p>';
                            echo '<p>';
                                echo '<input type="submit" name="btn" value="Valider">';
                            echo '</p>';
                        echo '</form>';
                    ?>
                </div>
                <div class="row">	
                    <div class="col-md-10">
                        <label>
                            <u>
                                <b>
                                    LISTE DES PROJETS
                                </b>
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
                                echo "<th>";
                                    echo "Actions";
                                echo "</th>";
                                foreach ($res_listlink as $valeur) { //Boucle : Pour chaque resultat 
                                if (($etat == "ouvrir") && ($id_click == $valeur['id'])) {
                                    echo '<form action="index_admin.php" method="post">';
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
                                                echo "<td>";
                                                    echo "<input type='submit' name='btn' value='Confirmer'/>";
                                                echo "</td>";
                                            echo "<tr>";
                                        echo '</form>';
                                    // -----------------------------------------------------
                                } else {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $valeur['nom'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $valeur['git'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $valeur['site'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo '<form action="index_admin.php" method="post">';
                                                echo "<input type='submit' name='btn' value='Modifier'/>";
                                                echo "<input type='hidden' name='id_link' value=" . $valeur['id'] . ">";
                                            echo '</form>';
                                            echo '<form action="index_admin.php" method="post">';
                                                echo "<input type='hidden' name='id_link' value=" . $valeur['id'] . ">";
                                                echo "<input type='submit' name='btn' value='Supprimer'/>";
                                            echo '</form>';
                                        echo "</td>";
                                    echo "</tr>";       
                                }
                            }
                            echo "</table>";
                        }
                    ?>
                    </div>
                </div>	
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>    
        <script src="./assets/js/script.js"></script>
    </body>
</html>