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

    public function testCreateGame(): void {
        $game = new Game();
        $id = $game->createGame();
        $this->assertIsInt($id);
    }
}

