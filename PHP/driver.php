<?php
require_once('account.php');

class Driver extends Account {
    public function __costruct($name, $document, $email, $password) {
        parent::__construct($name, $document, $email, $password);
    }

    public function printDataDriver() {
        echo "User: <br> 
        name: $this->name <br>
        document: $this->document <br>
        email: $this->email";
    }
} 
?>