<?php
namespace Franky\Haxor;

class Tokenizer
{
        private $MySession;

        public function __construct($session_name='haxor')
        {
            $this->MySession = $session_name;

            if(!isset($_SESSION[$this->MySession]))
            {
              $_SESSION[$this->MySession] = [];
            }

        }

        public function token($name,$val)
        {
              $token = md5(session_id().$name.$val);
              $_SESSION[$this->MySession][$token] = $val;
              return $token;
        }

        public function decode($token)
        {
            return $_SESSION[$this->MySession][$token]; //$this->MySession->GetVar($token)
        }

        public function delete( $name )
        {
          unset($_SESSION[$this->MySession][$token]);
        }
}
?>
