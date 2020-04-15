<?php
require "Header.php";
?>


<main id="registreren">

    <aside id="registrerenMenuLinks">
        hier staat iets
    </aside>

    <div id="registrerenContent">

        <h2>registreer hier</h2>
        <form action="regristratieConfirm.php" method="post">
            voornaam:     <input type="text" name="voornaam" placeholder="voornaam"><br>
            achternaam:     <input type="text" name="achternaam" placeholder="achternaam"><br>
            Email-adres:        <input type="text" name="email" placeholder="Voorbeeld@gmail.com"><br>
            adresgegevens       <input type="text" name="adresgegevens" placeholder="Doetinchemseweg 777a"><br>
            gebruikersnaam:     <input type="text" name="gebruikersnaam" placeholder="gebruikersnaam"><br>
            Wachtwoord:         <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
                                <button type="submit" name="registratieKnop">registreer</button>
        </form>

            <h2>of log hier in</h2>
            <form  method="post" action="login.php">
                <input type="text" name="email" placeholder="email of gebruikersnaam" required><br>
                <input type="password" name="Wachtwoord" placeholder="wachtwoord"   required><br>
                <button type="submit" name="inloggen">login</button>
            </form>

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
<?php
require "footer.php";
?>

