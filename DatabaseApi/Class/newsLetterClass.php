<?php

    class NewsLetter {

        function __construct() {
            include_once('databaseHandler.php');
            $this->database = new Database();
        }

        // register newsletters
        public function newsletterSignUp($name, $email) {
            $sql = "INSERT INTO `newsletter_signup` (`Name`, `Email`) VALUES ('$name', '$email')";
            $query = $this->database->connection->prepare($sql);
            $res = $query->execute();

            if($res == false){
                return array("error"=>"Gick ej att registrera användare för nyhetsbrev.");
            }else{
                return array("Status:" => "Registrerad användare för nyhetsbrev.");
            } 
        }

        public function getNewsletter() {
            $query = $this->database->connection->prepare("SELECT * FROM newsletter_signup;");
            $query->execute();
            $result = $query->fetchAll();

            if (empty($result)){
                return array("error"=> "Finns ej några registrerade nyhetsbrevskunder");
            }
            return $result;

        }
    }
?>