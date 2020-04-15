
<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "festivalupdate");

function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
}

function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

$db = db_connect();
$db;

    $email = $_POST['email'];
    $wachtwoord = $_POST['Wachtwoord'];

    if(empty($email) || empty($wachtwoord))
    {
        header("Location: regristreren.php?error=LegeVelden");
        $_SESSION['loggedin'] = false;
        exit();
    }
    else
    {
        $sql = "SELECT * FROM klanten WHERE Email=?;";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: regristreren.php?error=sqlError1");
            exit();
            $_SESSION['loggedin'] = false;
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result))
            {
                $pwdCheck = $wachtwoord;

                if($pwdCheck !== $row['Wachtwoord'])
                {
                    header("Location: regristreren.php?error=foutwachtwoord");
                    $_SESSION['loggedin'] = false;
                    exit();
                }
                elseif($pwdCheck == $row['Wachtwoord'])
                {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;
                    //Haalt KlantID op uit de database
                    $query = "select KlantID , rol FROM klanten where Email= '". $_SESSION['email'] ."'  " ;
                    $selecteren = mysqli_query($db, $query);

                    $db->query($query);

                    while ($subject = mysqli_fetch_assoc($selecteren)) {
                        $_SESSION['KlantID'] =  $subject["KlantID"];
                        $rol = $subject["rol"];
                    }
                    $db->close();

                        if($rol == "admin")
                        {
                            header("Location: Beheer/beheerMenu.php");
                            exit();
                        }
                        else
                        {
                        header("Location: regristreren.php?login=succesvol");
                        exit();
                        }
                }
            }
            else
            {
                header("Location: regristreren.php?error=geenGebruiker");
                $_SESSION['loggedin'] = false;
                exit();
            }
        }

}
?>

