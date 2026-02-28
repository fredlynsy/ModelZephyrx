<?php
/**
 * Tests for ModelZephyrx
 */

use PHPUnit\Framework\TestCase;
use Modelzephyrx\Modelzephyrx;

class ModelzephyrxTest extends TestCase {
    private Modelzephyrx $instance;

    protected function setUp(): void {
        $this->instance = new Modelzephyrx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Modelzephyrx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
