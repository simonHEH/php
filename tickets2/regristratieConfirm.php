<?php
require "Header.php";


$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$adresgegevens = $_POST["adresgegevens"];
$wachtwoord = $_POST["wachtwoord"];
$gebruikersnaam = $_POST["gebruikersnaam"];

$sql = "INSERT INTO klanten (Voornaam, Achternaam, Email, Telefoonnummer, Wachtwoord, Gebruikersnaam) VALUES ('".$voornaam."', '".$achternaam."','".$email."', '".$adresgegevens."', '".$wachtwoord."', '".$gebruikersnaam."')";
?>


<html>
<body>
<main id="registreren">

    <aside id="registrerenMenuLinks">
        hier staat iets
    </aside>
    <div id="registrerenContent">
        <?php echo "Bedankt ".$voornaam." voor uw gegistratie" ?>
    </div>
    </div>
    <aside id="registrerenMenuRechts">
        <ul>
            <li>basic </li> <h4> hier staat tekst over wat je allemaal met een basic kaartje kunt.</h4>
            <hr>
            <li>premium </li> <h4> hier staat tekst over wat je allemaal met een premium kaartje kunt.</h4>
            <hr>
            <li>vip </li> <h4> hier staat tekst over wat je allemaal met een vip kaartje kunt.</h4>
        </ul>
    </aside>


</main>
</body>
</html>

<?php
$db->query($sql);

require "footer.php";
?>
