<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];
    file_put_contents("saved_code.html", $code);
    echo "Code mis à jour avec succès! <a href='admin.php'>Retour</a>";
}
?>
