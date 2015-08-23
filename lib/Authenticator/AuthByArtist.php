<?php

class AuthByArtist implements AuthInterface
{
    public function auth($params)
    {   
        $artist  = $params['artist'];
        $userId  = $params['user_id'];

        return $this->_auth($userId, $artist);        

    }

    private function _auth($userId, $artist)
    {
        //Artistコードを元に会員認証をする処理の実装
        return true;
    }

}
