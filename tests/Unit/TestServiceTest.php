<?php 

namespace Prositedeveloper\Package\Tests\Unit;

use Prositedeveloper\Package\Facades\Test;
use Prositedeveloper\Package\Tests\TestCase;

class TestServiceTest extends TestCase
{
    public function test_sum_function(): void 
    {
        $this->assertEquals(10, Test::sum(5, 5));
        $this->assertEquals(12, Test::sum(6, 6));
    }

    public function test_get_another_text_function(): void 
    {
        $this->assertIsString(Test::getAnotherText());
    }
}