<?php
/*Event idを元にDB接続を行い、設定値を取得した上で、外部サイトに認証する*/
class AuthByEventId implements AuthInterface
{
    public function auth($params)
    {   
        $eventId  = $params['event_id'];
        $userId  = $params['user_id'];

        $setting  = $this->_getAuthSetteingByEventId($eventId)->_getArtist();
        $artist   = $setting->artist; 
        $site     = $setting->site; 

        return $this->_auth($userId, $artist, $site);        

    }

    private function _getAuthSetteingByEventId($eventId)
    {
        // eventIdをつかって認証用のアーティスト名とファンクラブサイト名を取得
        //データベースにアクセスして
        $setting = array(
            'event_id' => $eventId,
            'artist'   => 'JhonLennon',
            'site'     => 'JhonFC',
        );

        return $setting; 
    }

    private function _auth($userId, $artist, $site)
    {
        //Event IDを元に会員認証をする処理の実装
        return true;
    }

}
