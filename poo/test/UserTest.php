<?php









class UserTest
{

    private bool $status = false;

    public function __construct(protected string $firstName, protected  string $lastName, protected email $email, protected password $password)
    {
    }



    public function __toString(): string
    {
        $active = ($this->status)? "active": "no active" ;
        return "this user is $this->firstName $this->lastName and her email : $this->email with status  $active";
    }

}