<?php
/**
 * Tests for SolidCryptoVault
 */

use PHPUnit\Framework\TestCase;
use Solidcryptovault\Solidcryptovault;

class SolidcryptovaultTest extends TestCase {
    private Solidcryptovault $instance;

    protected function setUp(): void {
        $this->instance = new Solidcryptovault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidcryptovault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
