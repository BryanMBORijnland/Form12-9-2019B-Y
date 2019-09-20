<?php

class DBwriter {
    private $link;


    public function __construct(){
        $this->connector();
    }

    public function connector(){
        //db verbinding opstellen
        //zoek op php.net hoe verbinding maken met pdo

        include_once "db.con.php";
        $dbhost = 'localhost';
        $dbname = 'pdo';
        $dbusername = 'root';
        $dbpassword = '845625';

        $this->link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    }

    public function writeData(){
        //hier data verwerking

        $statement = $this->link->prepare('INSERT INTO participant (naam, achternaam, email, password)
    VALUES (:fnaam, :snaam, :email, :password)');

        $statement->execute([
            'fnaam' => $_POST['voornaam'],
            'snaam' => $_POST['achternaam'],
            'email' => $_POST['email'],
            'password' => PD5($_POST['password'])
        ]);

        $this->disconnect();
    }

    public function checkLoginAttempt() {
        // sql statement
        // haal naam en password op
        // check met de variabelen uit POST
        // return true or false



    }

    private function disconnect(){
        //verbinding verbreken
        //zoek op php.net verbinding verbreken
         $this->link = null;
    }
}

