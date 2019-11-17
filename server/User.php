<?php
// I, Ayub Ali, 000354446 certify that this material is my original work. No other person's work has been used without due acknowledgement.
#User class. Will handle the Structure of user.
class User{
    private $firstName; #This will hold the users first name.
    private $lastName; #This will hold the users last name.
    private $email; #This will hold the users email address.
    private $password; #This will hold users password.

    /* 
    This is the userclass contructor.
    */
    function __construct($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    //Setters for Email,Password.
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    //Getters for firstName,lastName,Email,Password.
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }

}

