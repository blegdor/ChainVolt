<?php
/**
 * Tests for ChainVolt
 */

use PHPUnit\Framework\TestCase;
use Chainvolt\Chainvolt;

class ChainvoltTest extends TestCase {
    private Chainvolt $instance;

    protected function setUp(): void {
        $this->instance = new Chainvolt(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainvolt::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
