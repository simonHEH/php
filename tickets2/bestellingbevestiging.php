<?php
require Header.php;
function bestellen($db)
{



    if (isset($_POST['bestellen'])) {


        $basic = $_POST['basic'];
        $premium = $_POST['premium'];
        $vip = $_POST['vip'];

        $user_check = $_SESSION['login_user'];
        $klantID = "SELECT KlantID FROM klanten WHERE Gebruikersnaam = '" . $user_check . "'";



        $result = mysqli_query($db, $klantID) or die(mysqli_error($db));
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $query = "INSERT INTO bestellingen(KlantID, basic, premium, vip) values('". $row['KlantID'] ."''" . $basic . "' , '" . $premium . "', '" . $vip . "' )";
                mysqli_query($db, $query) or die(mysqli_error($db));
            }
        }
        $count = mysqli_num_rows($result);
    }
}

require footer.php;
?>