<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Optima Studio - Accueil</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #fafafa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }

    .home-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
    }

    /* Hero */
    .hero {
      text-align: center;
      padding: 60px 20px;
     background: linear-gradient(120deg, #EC6508, #D23F16);
      color: #fff;
      border-radius: 8px;
      margin-bottom: 60px;
    }

    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }

    .cta-button {
      background: #fff;
      color: #1abc9c;
      padding: 12px 24px;
      border-radius: 4px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }

    .cta-button:hover {
      background: #f0f0f0;
    }

    /* Services section */
    .home-services {
      text-align: center;
      margin-bottom: 60px;
    }

    .home-services h2 {
      font-size: 2rem;
      color: #222;
      margin-bottom: 20px;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      padding: 0 20px;
    }

    .services-grid article {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
    }

    .services-grid article:hover {
      transform: translateY(-5px);
    }

    .services-grid h3 {
      color: #222;
      margin-bottom: 10px;
    }

    .cta-link {
      display: inline-block;
      margin-top: 20px;
      color: #1abc9c;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .cta-link:hover {
      color:rgba(64, 0, 255, 0.29);
    }

    /* Portfolio preview */
    .home-portfolio {
      text-align: center;
      margin-bottom: 60px;
    }

    .home-portfolio h2 {
      font-size: 2rem;
      color: #222;
      margin-bottom: 20px;
    }

    .portfolio-preview {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 0 20px;
      margin-bottom: 20px;
    }

    .portfolio-preview img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
    }

    .portfolio-preview img:hover {
      transform: scale(1.03);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }
      .hero p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  <?php include('./includes/header.php'); ?>

  <main class="home-container">
    <!-- Section héro -->
    <section class="hero">
      <h1>Optima Studio</h1>
      <p>Design Graphique. Webdesign. Motion Design.</p>
      <a href="contact.php" class="cta-button">Nous Contacter</a>
    </section>

    <!-- Section Services en bref -->
    <section class="home-services">
      <h2>Nos Services</h2>
      <div class="services-grid">
        <article>
          <h3>Identité Visuelle</h3>
          <p>Logos, charte graphique, branding sur mesure.</p>
        </article>
        <article>
          <h3>Webdesign</h3>
          <p>Sites web responsive, modernes et attractifs.</p>
        </article>
        <article>
          <h3>Motion Design</h3>
          <p>Animations percutantes pour vos contenus.</p>
        </article>
      </div>
      <a href="services.php" class="cta-link">En savoir plus →</a>
    </section>

    <!-- Section Portfolio -->
    <section class="home-portfolio">
      <h2>Dernières réalisations</h2>
      <div class="portfolio-preview">
<video controls width="320" height="180">
  <source src="video/WhatsApp Video 2025-06-24 at 23.09.29_904f1b4c.mp4" type="video/mp4" >
    Cette vidéo présente le projet 1 : une démonstration d’animation 2D.
</video>

        <img src="images/logo_optima1_030208_1_.png" alt="Projet 2">
        <img src="images/Affiche.jpg" alt="Projet 3">
      </div>
      <a href="portfolio.php" class="cta-link">Voir le portfolio →</a>
    </section>
  </main>

  <?php include('./includes/footer.php'); ?>
</body>
</html>
