<?php
/**
 * Tests for TokenSketch
 */

use PHPUnit\Framework\TestCase;
use Tokensketch\Tokensketch;

class TokensketchTest extends TestCase {
    private Tokensketch $instance;

    protected function setUp(): void {
        $this->instance = new Tokensketch(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokensketch::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
