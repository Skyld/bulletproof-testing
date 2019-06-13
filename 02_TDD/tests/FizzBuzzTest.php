<?php

declare(strict_types=1);

namespace Skyld\BulletproofTesting\TDD\Tests;

use PHPUnit\Framework\TestCase;
use Skyld\BulletproofTesting\TDD\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /** @var FizzBuzz **/
    private $subject;

    protected function setUp(): void
    {
        $this->subject = new FizzBuzz();
    }
}
