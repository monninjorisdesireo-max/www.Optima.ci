<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom       = $_POST["nom"] ?? '';
    $prenoms   = $_POST["prenoms"] ?? '';
    $domaines  = $_POST["domaines"] ?? '';
    $telephone = $_POST["telephone"] ?? '';
    $email     = $_POST["email"] ?? '';
    $residence = $_POST["residence"] ?? '';
    $demande   = $_POST["demande"] ?? '';

    echo "<br> nom: $nom<br> prenoms: $prenoms<br> domaines: $domaines<br> telephone: $telephone<br> email: $email<br> residence: $residence<br> demande: $demande";

    include("connect_index.php");

    $date = gmdate("Y-m-d");

    // ✅ Préparer la requête AVEC des "?" à la place des valeurs
    $sql = "INSERT INTO t_optima (nom, prenoms, domaines, telephone, email, residence, demande, date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $opt->prepare($sql);

    // ✅ Exécuter en passant les valeurs dans le bon ordre
    $result = $stmt->execute([$nom, $prenoms, $domaines, $telephone, $email, $residence, $demande, $date]);

    if ($result) {
        echo "<br> ✅ Données enregistrées";
    } else {
        echo "<br> ❌ Échec de l'enregistrement";
    }

    // Tu pourras afficher le résultat ensuite, par exemple :
    $req2 = "SELECT * FROM t_optima ORDER BY nom, prenoms ASC";
    foreach ($opt->query($req2) as $rst) {
        echo "<hr>";
        echo "id: $rst[id]<br> nom: $rst[nom]<br> prenoms: $rst[prenoms]<br> domaines: $rst[domaines]<br> telephone: $rst[telephone]<br> email: $rst[email]<br> residence: $rst[residence]<br> demande: $rst[demande]<br> date: $rst[date]<br>";
    }
}
?>
`