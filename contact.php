<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact - Optima Studio</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
<div class="background-icons">
    <img src="images/palette.png" style="left:10%; animation-duration: 18s;">
    <img src="images/brush.png" style="left:50%; animation-duration: 22s;">
    <img src="images/camera.png" style="left:80%; animation-duration: 26s;">
    <img src="images/laptop.png" style="left:30%; animation-duration: 20s;">
    <!-- Ajoute autant d’icônes que tu veux -->
</div>

<?php include('includes/header.php'); ?>
  <main class="container-contact">
    <section class="intro-contact">
      <h1>Contactez Optima Studio</h1>
      <p>Nous sommes à votre disposition pour vos projets créatifs !</p>
    </section>

    <section class="contact-form-section">
      <form action="Index.php" method="POST" >
        <input type="text" name="nom" placeholder="Votre nom" required>
        <input type="text" name="prenoms" placeholder="Vos prénoms" required>
        <input type="text" name="domaines" placeholder="Votre domaine d'activité" required>
        <input type="tel" name="telephone" placeholder="Votre numéro de téléphone" required>
        <input type="email" name="email" placeholder="Votre e-mail" required>
        <input type="text" name="residence" placeholder="Votre résidence" required>
        <textarea name="demande" placeholder="Votre message" required></textarea>
        <button type="submit">Envoyer</button>
      </form>
    </section>

    <aside class="contact-info">
      <h2>Nos coordonnées</h2>
      <p>Email : contact@optima-studio.com</p>
      <p>Téléphone : +225 07 01 02 03 04</p>
      <p>Adresse : Abidjan, Cocody</p>
      <p>Suivez-nous sur :</p>
      <ul class="socials">
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">LinkedIn</a></li>
      </ul>
    </aside>
  </main>

<?php include('includes/footer.php'); ?>
</body>
</html>
