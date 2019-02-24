<?php
class Log
{
    public function login()
    {
        $a = $_POST['email'];
        $b = $_POST['password'];
        if (empty($a) or empty($b)) {
            echo "Must Fiil Up Email id And Password";
        }

        else{
            echo"<h2> Log In Successfull</h2>";
        }


    }
}

$obg=new Log;
$obg->login();


?>