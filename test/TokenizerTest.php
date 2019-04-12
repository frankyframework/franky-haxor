<?php
use PHPUnit\Framework\TestCase;
use Franky\Haxor\Tokenizer;

class TokenizerTest extends TestCase
{
    public function testGet()
    {
          $Tokenizer = new Tokenizer();
          $valor = 'phpunit';
          $result = $Tokenizer->token('test',$valor);
          $this->assertSame($Tokenizer->decode($result), $valor);
          return $data;
    }
}
