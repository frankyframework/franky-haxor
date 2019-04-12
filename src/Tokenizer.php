<?php
namespace Franky\Haxor;

class Tokenizer
{
        private $MySession;

        public function __construct($session_name='haxor')
        {
            //$this->MySession = new \vendor\core\MYSESSION('haxor');
            $this->MySession = $_SESSION[$session_name];
        }

        public function token($name,$val)
        {
              $token = md5(session_id().$name.$val);
            //  $this->MySession->SetVar($token,$val);
              $this->MySession[$token] = $val;
              return $token;
        }

        public function decode($token)
        {

            return $this->MySession[$token]; //$this->MySession->GetVar($token);
        }

        public function delete( $name )
        {
          unset($this->MySession[$token]/*$this->MySession->GetVar($name)*/);
        }
}
?>
