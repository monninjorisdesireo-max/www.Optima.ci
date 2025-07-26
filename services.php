<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Services - Optima Studio</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #fafafa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }

    .container-services {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .container-services h1 {
      font-size: 2.2rem;
      text-align: center;
      color: #222;
      margin-bottom: 10px;
    }

    .intro-services {
      font-size: 1.1rem;
      text-align: center;
      max-width: 800px;
      margin: 0 auto 40px auto;
      color: #555;
      line-height: 1.6;
    }

    .service-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }

    .service-item {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-align: center;
    }

    .service-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }

    .service-item h2 {
      font-size: 1.2rem;
      color: #222;
      margin-bottom: 10px;
    }

    .service-item p {
      font-size: 0.95rem;
      color: #555;
      line-height: 1.5;
    }

    @media (max-width: 768px) {
      .container-services {
        margin: 40px auto;
      }

      .service-list {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main class="container-services">
    <h1>Nos Services</h1>
    <p class="intro-services">
      Découvrez les solutions créatives qu’Optima Studio met à votre disposition pour donner vie à votre image.
    </p>

    <section class="service-list">
      <article class="service-item">
        <h2>Identité visuelle</h2>
        <p>Création de logos, chartes graphiques et univers visuels sur mesure pour affirmer votre marque.</p>
      </article>

      <article class="service-item">
        <h2>Webdesign</h2>
        <p>Conception d’interfaces web modernes, esthétiques et responsive qui captent l’attention.</p>
      </article>

      <article class="service-item">
        <h2>Supports de communication</h2>
        <p>Réalisation d’affiches, brochures, cartes de visite et tout support imprimé qui reflète votre identité.</p>
      </article>

      <article class="service-item">
        <h2>Motion design</h2>
        <p>Animations, vidéos explicatives, bannières animées pour dynamiser votre communication digitale.</p>
      </article>
    </section>
  </main>

  <?php include('includes/footer.php'); ?>
</body>
</html>
