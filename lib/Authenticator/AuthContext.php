<?php

class AuthContext implements AuthContextInterface
{
    private $authenticator;

    public function __construct(AuthInterface $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function auth($params)
    {
        $this->authenticator->auth($params);
    }
}
