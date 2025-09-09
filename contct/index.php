<?php

    @include 'config.php';

    if(isset($_POST['submit'])){
        $Prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
        $Nom = mysqli_real_escape_string($conn, $_POST['nom']);
        $Email = mysqli_real_escape_string($conn, $_POST['email']);
        $Message = mysqli_real_escape_string($conn, $_POST['message']);


        $insert = "INSERT INTO messages(Prenom, Nom, Email, Message) VALUES('$Prenom', '$Nom', '$Email', '$Message')";
        mysqli_query($conn, $insert);
        mysqli_close($conn); 
        header('location: ../index.html');
        exit;
    };

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Contact</title>
</head>
<body>
    <header>
        <h1 class="typewriter">Contacte-moi</h1>
    </header>
    <main>
        <form action="" method="post">
            <label for="prenom">Prenom</label><br>
            <input type="text" id="prenom" name="prenom" required><br>
            <label for="nom">Nom</label><br>
            <input type="text" id="nom" name="nom" required><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" rows="5" cols="40" placeholder="Ecrire votre message...."></textarea><br>

            <input type="submit" name="submit" value="Envoyer">
        </form>
    </main>
    <footer>
        <p>&copy; 2025 Walid Makdoud. Tous droits réservés.</p>
    </footer>
</body>
</html>