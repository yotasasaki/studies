<?php

interface AuthContextInterface
{
    public function __construct(AuthInterface $authenticator);

    public function auth($params);

}
