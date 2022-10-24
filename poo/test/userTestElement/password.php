<?php

class password
{

    private int $minLen = 6;
    protected string $password;

    public function __construct(string $input)
    {
        if (count($input) <= $this->minLen)
        {
            $this->password = $input;
        }
        else{
            trigger_error("password is not valid", E_USER_ERROR);
        }
    }

    public function __toString(): string
    {
        return "*"*$this->minLen;
    }




}