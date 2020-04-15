<?php
require "Header.php";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {


    echo '       
       <h2 id="h2Home">Koop hier uw tickets. </h2> <br>
        <form action="bestellingbevestiging.php" method="post">
            aantal tickets  <input type="number" name="aantalTickets" value="aantalTickets" required /> <br>
            soort ticket:

            €50,-  basic           <input type="radio"  name="soortTickets" value="basic" />
            €70,-  premium         <input type="radio"  name="soortTickets" value="premium"/>
            €150,- vip             <input type="radio"  name="soortTickets" value="vip"/> <br>

            <input type="submit" value="verzenden" id="Home" />
        </form>';


} else {
    echo '<h3 id="h3Home">Log eerst in om kaartjes te kopen <br> Als u nog geen account heeft kunt u een nieuw account maken</h3>';
}
?>

<main id="home">
    <aside id="HomeMenulinks">
        hier slideshow
    </aside>

    <div id="h2Content">
        <h2 id="h2Home">Koop hier uw tickets</h2>

        <form method="post">
            naam*           <input type="text" name="naam" required /> <br>
            Email*          <input type="email"  name="email" required /> <br>
            aantal tickets  <input type="number" name="ticktes" required /> <br>
            soort ticket:
            basic           <input type="radio"  name="soort" value="basic"/>
            premium         <input type="radio"  name="soort" value="premium"/>
            vip             <input type="radio"  name="soort" value="vip"/> <br>
            <input type="submit" value="verzenden" />
    </div>

    <aside id="HomeMenuRechts">
        <ul>
            <li>basic </li> <h4>de basic ticket je komt binnen en dat is het</h4>
            <hr>
            <li>premium </li> <h4>kan dichter bij het podium komen dan bij het normalen kaartje</h4>
            <hr>
            <li>vip </li> <h4>kan dicht bij het podium komen en krijgt een backstage pas</h4>
        </ul>
    </aside>

</main>
<?php
require "footer.php";
?>