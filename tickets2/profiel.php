<?php
require "Header.php";
?>

    <main id="profiel">


        <aside id="profielMenuLinks">
            hier staat iets
        </aside>

        <div id="profielContent">
            <h2 id="h2Home">uw gegevens</h2>

            gebruikersnaam:     simon <br>
            Email-adres:        simon@gmail.com<br>

            <form  action="Home.php">
                <input type="submit" value="aanpassen" />
            </form>
            <hr>
            huidig aantal tickets:     2<br>
            soort ticket :      VIP<br>
            <hr>
            eerdere bestellingen:
            aantal tickets:     4<br>
            soort ticket :      VIP<br>

        </div>
        <aside id="profielMenuRechts">
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