<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Portfolio - Optima Studio</title>
  <style>
    /* Styles portfolio */
    body {
      margin: 0;
      padding: 0;
      background: #fafafa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .button_pdf{

      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
      color: #1abc9c;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
 

    }

    .button_pdf:hover{
      color: rgba(255, 119, 0, 0.84);
    }

    .container-portfolio {
      max-width: 1200px;
      margin: 60px auto;
      padding: 0 20px;
      color: #333;
      line-height: 1.6;
    }

    .container-portfolio h1 {
      font-size: 2.2rem;
      color: #222;
      text-align: center;
      margin-bottom: 10px;
    }

    .intro-portfolio {
      font-size: 1.1rem;
      text-align: center;
      max-width: 800px;
      margin: 0 auto 40px auto;
      color: #555;
    }

    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .portfolio-item {
      background: #fff;
      border-radius: 8px;
      padding: 15px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-align: center;
    }

    .portfolio-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .portfolio-item img {
      width: 100%;
      height: auto;
      border-radius: 6px;
      margin-bottom: 10px;
      object-fit: cover;
    }

    .portfolio-item h2 {
      font-size: 1.2rem;
      color: #222;
      margin: 10px 0 5px;
    }

    .portfolio-item p {
      font-size: 0.9rem;
      color: #555;
    }

    /* Responsive ajustements */
    @media (max-width: 768px) {
      .container-portfolio {
        margin: 40px auto;
      }

      .intro-portfolio {
        padding: 0 10px;
      }

      .portfolio-grid {
        gap: 20px;
      }
    }
  </style>
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main class="container-portfolio">
    <h1>Notre Portfolio</h1>
    <p class="intro-portfolio">Découvrez une sélection de nos réalisations les plus marquantes.</p>

    <section class="portfolio-grid">
      <!-- Projet 1 -->
      <article class="portfolio-item">
      
        <h2>Identité de marque - Projet 1</h2>
        <p>Création d’un logo et d’une charte graphique complète pour une startup technologique.</p>
           <a class="button_pdf" href="Files/charte graphique.pdf" target="_blank">Ouvrir le PDF</a>
      </article>

      <!-- Projet 2 -->
      <article class="portfolio-item">
        <h2> Conception de produit en 3D   - Projet 2</h2>
        <p>Modelisation et texturage d'une bouteille de vin en 3D.</p>
        <video controls width="320" height="180">
  <source src="video/Bouteille de vin.mp4" type="video/mp4" >

</video>

           
      </article>

      <!-- Projet 3 -->
      <article class="portfolio-item">
        
        <h2>Animation Motion - Projet 3</h2>
        <p>Création d’une animation 2D pour KLAM'CREATIVE une agence de communication.</p>
        <video controls width="320" height="180">
  <source src="video/!KLAM.mp4" type="video/mp4" >

</video>
      </article>

      <!-- Ajoute d’autres projets ici -->
    </section>
  </main>

  <?php include('includes/footer.php'); ?>
</body>
</html>
