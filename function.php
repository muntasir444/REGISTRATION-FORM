<?php



class Registration
{

    public function data()
    {
        $a = $_POST['fname'];
        $b = $_POST['lname'];
        $c = $_POST['mail'];
        $d = $_POST['phone'];
        $e = $_POST['pass'];
        if (empty($a) or empty($b) or empty($c) or empty($d) or empty($e)) {
            echo "<h2>Empty is Not excepted</h2>";
        } else {
            echo "<h2>Registration Successful And Show your Data </h2>";
            echo "<br>";

            echo "Your Name is " . $a . $b;
            echo "<br>";
            echo "Your E-mail is " . $c;
            echo "<br>";

            echo "Your Phone Number  is " . $d;
            echo "<br>";

            echo "Your password is " . $e;


        }

    }



}

$obg=new Registration;
$obg->data();



?>
