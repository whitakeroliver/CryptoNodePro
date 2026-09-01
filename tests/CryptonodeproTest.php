<?php
/**
 * Tests for CryptoNodePro
 */

use PHPUnit\Framework\TestCase;
use Cryptonodepro\Cryptonodepro;

class CryptonodeproTest extends TestCase {
    private Cryptonodepro $instance;

    protected function setUp(): void {
        $this->instance = new Cryptonodepro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptonodepro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
