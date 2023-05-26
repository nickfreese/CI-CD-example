<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testExampleIsTrue(): void
    {
    	require_once("./src/Example.php");
        $example = new Example();

        $result = $example->run();

        $this->assertSame(true,  $result);
    }
}