<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testRandomQ()
    {
        ob_start();
        $_GET['action'] = "getRandomQ";
        include "src/api/controller.php";
        $result = ob_get_clean();
        $this->assertArrayHasKey("id", $result);
        $this->assertArrayHasKey("url", $result);
        $this->assertArrayHasKey("likes", $result);
        $this->assertArrayHasKey("dislikes", $result);
    }
}
