<?php
include 'CalcularDni.php';

use PHPUnit\Framework\TestCase;
use Funcionalidades;
class DniTest extends TestCase{
    public function test(){
        $calcDNI = new Funcionalidades\CalcularDni();
        $result = $calcDNI->prueba("19066557");
        $this->assertEquals("V", $result);
    }

    public function testII(){
        $calcDNI = new Funcionalidades\CalcularDni();
        $result = $calcDNI->prueba("12455789");
        $this->assertEquals("R", $result);
    }
}
?>
