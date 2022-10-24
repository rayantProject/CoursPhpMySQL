<?php

class email
{

    protected string $header;

    protected string $vendor;

    protected string $domain;



    public function __construct(string $adrresss)
    {

        if (str_contains($adrresss, '@') AND str_contains($adrresss, '.'))
        {
            $mail = explode("@", $adrresss);

            $this->header = $mail[0];
            $this->vendor = explode(".", $mail[1])[0];
            $this->domain = explode(".", $mail[1])[1];


        }else
        {
            trigger_error("Email address is not valid", E_USER_ERROR);
        }




    }


    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }


    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function getVendor(): string
    {
        return $this->vendor;
    }

    public function __toString(): string
    {
        return "$this->header@$this->vendor.$this->domain";
    }






}


$test = new email("rayantraore@gmail.com");




