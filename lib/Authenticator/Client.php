<?php

class Client implements ClientInterface
{
    
    public function __construct($params);
    {
        $this->params = $params;    
    }

    private function _isEventIdAuth()
    {
        return $this->params['event_id'] ? true : false; 
    }

    private function _isArtistAuth()
    {
        return $this->params['artist'] ? true : false;
    }

    public function auth($params)
    {
        if ($this->_isEventIdAuth()) {
            $authenticator = new AuthByEventId($this->params);
            $context = new AuthContext($authenticator); 
            $context->auth();
        } elseif ($this->_isArtistAuth) {
            $authenticator = new AuthByArtist($this->params);
            $context = new AuthContext($authenticator); 
            $context->auth();
        } else {
            $authenticator = new FailureResult();
        }
    }

    
}

$authenticator = new Client($_GET);
$authenticator->auth();

    

