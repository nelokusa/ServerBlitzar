<?php
/**
 * Tests for ServerBlitzar
 */

use PHPUnit\Framework\TestCase;
use Serverblitzar\Serverblitzar;

class ServerblitzarTest extends TestCase {
    private Serverblitzar $instance;

    protected function setUp(): void {
        $this->instance = new Serverblitzar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Serverblitzar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
