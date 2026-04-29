<?php
session_start();

if (!isset($_SESSION["secret"])) {
    $_SESSION["secret"] = rand(1, 100);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $essai = $_POST["essai"];

    if ($essai < $_SESSION["secret"]) {
        $message = "Plus grand !";
    } elseif ($essai > $_SESSION["secret"]) {
        $message = "Plus petit !";
    } else {
        $message = "Bravo ! Tu as trouvé !";
        session_destroy();
    }
}
?>

<p><?php echo $message; ?></p>

<form action="jeu.php" method="POST">
    <input type="number" name="essai">
    <button type="submit">Valider</button>
</form>