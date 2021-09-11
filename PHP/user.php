<?php
require_once('account.php');

class User extends Account {
    public function __construct($name, $document, $email, $password) {
        parent::__construct($name, $document, $email, $password);
    }

    public function printDataUser() {
        echo "<br> <h3>User:</h3> <br> 
        name: $this->name <br>
        document: $this->document <br>
        email: $this->email";
    }
}
?>