<?php
declare(strict_types=1);
use PHPUnit/FrameWork/TestCase;

final class FishTest extends TestCase {
    public function testCreateMackerel():  void {
        $mackerel = new Fish(1);

        assertEqual($mackerel->name == 'mackerel');
        assertEqual($mackerel->strength == 1);
        assertEqual($mackerel->number == 10);
    }

    public function testCreateBass():  void {
        $bass = new Fish(2);

        assertEqual($bass->name == 'bass');
        assertEqual($bass->strength == 2);
        assertEqual($bass->number == 8);
    }

    public function testCreateCod():  void {
        $cod = new Fish(1);

        assertEqual($cod->name == 'cod');
        assertEqual($cod->strength == 3);
        assertEqual($cod->number == 6);
    }

    public function testCreateTuna():  void {
        $tuna = new Fish(1);

        assertEqual($tuna->name == 'tuna');
        assertEqual($tuna->strength == 4);
        assertEqual($tuna->number == 4);
    }

    public function testCreateShark():  void {
        $shark = new Fish(1);

        assertEqual($shark->name == 'shark');
        assertEqual($shark->strength == 5);
        assertEqual($shark->number == 1);
    }


}

