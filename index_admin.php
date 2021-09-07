<html>
	<head>
		<!-- META -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- CSS -->
		<link href="../Portfolio/assets/styles/style.css" rel="stylesheet">
		<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- JS -->
        <script src="assets/bootstrap/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/jquery-slim.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/bootstrap/js/util.js"></script>
		<style></style>
		<!-- TITRE -->
        <title>Panneau administrateur</title>
	</head>
	
	<body>
		
		<?php

            require('./database/connexion_bdd.php');
            
            include('assets/php/function.php');

			if (isset($erreur)){
				print $erreur;
			}
		?>

    
    <div class="container">
        <div class="row center-move">
            <div class="col-md-9">
			<p><a href="index.php">Retour à l'accueil</a></p>


            <div class="container mb-4">
        
                <!-- 1st row -->
                <div class="row">
                    <div class="col-7 mx-auto mt-5">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <h2>
                                        Importer une Image
                                    </h2>
                                </center>
                                <br>
                                <!--  -->
                                <form enctype="multipart/form-data" action="index.php" method="post">
                                    .<div class="form-group">
                                    <input type="text" class="form-control" name="p_description" aria-describedby="helpId" placeholder="Description">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input name="img" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Importer">
                                        <button class="btn btn-outline-info" type="submit" id="inputGroupFileAddon04">Envoyer</button>
                                    </div>
                                    <div>
                                    <?php

                                        // CONDITIONS \\
                                        // Afficher la liste des liens
                                        //si $res_listlink contient au moins une données 
                                        if ($res_select->num_rows > 0) {
                                            //faire ceci
                                            echo "<table>";

                                                echo "<th>";
                                                    echo "Nom de l'image";
                                                echo "</th>";

                                                echo "<th>";
                                                    echo "Description de l'image";
                                                echo "</th>";

                                                echo "<th>";
                                                    echo "Actions";
                                                echo "</th>";

                                                foreach ($res_select as $valeur) { //Boucle : Pour chaque resultat 

                                                if (($etat == "ouvrir") && ($id_img == $valeur['id'])) {

                                                    echo '<form action="index_admin.php" method="post">';
                                                        echo "<input type='hidden' name='id_img' value=" . $valeur['id'] . ">";
                                                            echo "<tr>";

                                                                echo "<td>";
                                                                    echo "<input type='text' name='new_name'  value='" . $valeur['name'] . "'>";
                                                                echo "</td>";

                                                                echo "<td>";
                                                                    echo "<input type='text' name='new_desc'  value='" . $valeur['description'] . "'>";
                                                                echo "</td>";

                                                            echo "<tr>";

                                                        echo '</form>';

                                                    // -------------------------------------------------------
                                                
                                                } else {

                                                    echo "<tr>";

                                                        echo "<td>";
                                                            echo $valeur['name'];
                                                        echo "</td>";

                                                        echo "<td>";
                                                            echo $valeur['description'];
                                                        echo "</td>";
                                                    
                                                        echo "<td>";
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
                                        else { //sinon
                                            //faire cela
                                            echo "Il n'y a aucun résultats";
                                        }

                                        ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <br>
            </div>
			
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

                            // -------------------------------------------------------
                        
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
                else { //sinon
                    //faire cela
                    echo "Il n'y a aucun résultats";
                }

                ?>

            </div>

        </div>

        <div class="row">
            <div class="col-md-9">   

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
        </div>
    </div>
	</body>
</html>