<?php
/**
 * Tests for EchoLoom
 */

use PHPUnit\Framework\TestCase;
use Echoloom\Echoloom;

class EcholoomTest extends TestCase {
    private Echoloom $instance;

    protected function setUp(): void {
        $this->instance = new Echoloom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echoloom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
