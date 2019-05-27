<?php

declare(strict_types=1);

namespace Skyld\BulletproofTesting\FizzBuzz\Tests;

use PHPUnit\Framework\TestCase;
use Skyld\BulletproofTesting\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $subject;

    protected function setUp(): void
    {
        $this->subject = new FizzBuzz();
    }
}
