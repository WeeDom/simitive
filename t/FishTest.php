<?php
declare(strict_types=1);

use PHPUnit\FrameWork\TestCase;
require __DIR__ . '/../fishing.php';

final class FishTest extends TestCase {
    public function testDB(): void {
        $db = new DB();
        $connected_db = $db->connect();
        $result = $connected_db->query('SELECT DATABASE()')->fetch_row();
        $this->assertEquals($result[0], 'simitive');
    }

    public function testCreateMackerel():  void {
        $mackerel = new Fish(1);

        $this->assertEquals($mackerel->name == 'mackerel');
        $this->assertEquals($mackerel->strength == 1);
        $this->assertEquals($mackerel->number == 10);
    }

    public function testCreateBass():  void {
        $bass = new Fish(2);

        $this->assertEquals($bass->name == 'bass');
        $this->assertEquals($bass->strength == 2);
        $this->assertEquals($bass->number == 8);
    }

    public function testCreateCod():  void {
        $cod = new Fish(1);

        $this->assertEquals($cod->name == 'cod');
        $this->assertEquals($cod->strength == 3);
        $this->assertEquals($cod->number == 6);
    }

    public function testCreateTuna():  void {
        $tuna = new Fish(1);

        $this->assertEquals($tuna->name == 'tuna');
        $this->assertEquals($tuna->strength == 4);
        $this->assertEquals($tuna->number == 4);
    }

    public function testCreateShark():  void {
        $shark = new Fish(1);

        $this->assertEquals($shark->name == 'shark');
        $this->assertEquals($shark->strength == 5);
        $this->assertEquals($shark->number == 1);
    }


}

