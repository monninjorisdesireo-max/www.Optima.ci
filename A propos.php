<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>À propos - Optima Studio</title>
  <style>
    /* Styles À propos */
    body {
      margin: 0;
      padding: 0;
      background: #fafafa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container-about {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 20px;
      color: #333;
      line-height: 1.6;
    }

    .container-about h1 {
      font-size: 2.2rem;
      color: #222;
      text-align: center;
      margin-bottom: 20px;
    }

    .intro-about {
      font-size: 1.1rem;
      text-align: center;
      max-width: 800px;
      margin: 0 auto 40px auto;
      color: #555;
    }

    .about-history,
    .about-values,
    .about-team {
      margin-bottom: 50px;
    }

    .about-history h2,
    .about-values h2,
    .about-team h2 {
      font-size: 1.8rem;
      color:rgb(237, 90, 5);
      margin-bottom: 15px;
      border-bottom: 2px solid rgb(237, 90, 5);;
      padding-bottom: 5px;
      display: inline-block;
    }

    .about-history p {
      color: #444;
    }

    .about-values ul {
      list-style: none;
      padding: 0;
      font-size: 1.1rem;
    }

    .about-values ul li {
      padding: 5px 0;
      color: #333;
    }

    .about-team .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .team-member {
      background: #f8f8f8;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .team-member:hover {
      transform: translateY(-5px);
    }

    .team-member img {
      width: 100%;
      max-width: 120px;
      height: auto;
      margin-bottom: 10px;
      object-fit: cover;
      border: 3px solid #1abc9c;
    }

    .team-member h3 {
      font-size: 1.2rem;
      margin: 5px 0;
      color: #222;
    }

    .team-member p {
      font-size: 0.9rem;
      color: #666;
    }
  </style>
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main class="container-about">
    <h1>À propos d’Optima Studio</h1>
    <p class="intro-about">
      Optima Studio est une agence créative passionnée par le design graphique, le webdesign et le motion design. Notre mission est d’accompagner les entreprises à créer une identité visuelle unique et impactante.
    </p>

    <section class="about-history">
      <h2>Notre Histoire</h2>
      <p>Fondé en 2025 à Abidjan, Optima Studio a collaboré avec plus d’une centaine de clients dans divers secteurs. Notre expertise repose sur une équipe pluridisciplinaire qui allie créativité et savoir-faire technique.</p>
    </section>

    <section class="about-values">
      <h2>Nos valeurs</h2>
      <ul>
        <li>💡 Créativité</li>
        <li>🤝 Collaboration</li>
        <li>🚀 Innovation</li>
        <li>🎯 Excellence</li>
      </ul>
    </section>

    <section class="about-team">
      <h2>Notre Équipe</h2>
      <div class="team-grid">
        <article class="team-member">
          <img src="images/WhatsApp Image 2025-06-23 at 21.22.11_84512cd1.jpg" alt="Membre 1" >
          <h3>Mlle ADOU</h3>
          <p>Directrice Artistique</p>
        </article>
        <article class="team-member">
        <img src="images/0G1A9115.jpg " alt="Membre 1" >
        <h3>M.OYOUA</h3>
          <p>Webdesigner</p>
        </article>
        <article class="team-member">
          <img src="images/marco.jpg" alt="Membre 2">
          <h3>M.AGNERO</h3>
          <p>Infographiste</p>
        </article>
        <article class="team-member">
          <img src="images/silue.jpg" alt="Membre 2">
          <h3>M.SILUE Josue</h3>
          <p>Infographiste </p>
        </article>
        <article class="team-member">
          <img src="images/ChatGPT Image 25 juin 2025, 11_27_17.png" alt="Membre 2">
          <h3>M.TRAORE</h3>
          <p>Monteur video/Motion designer</p>
        </article>
        <!-- Ajoute d’autres membres ici -->
      </div>
    </section>
  </main>

  <?php include('includes/footer.php'); ?>
</body>
</html>
