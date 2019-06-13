# Exercise 2 - FizzBuzz Game with TDD

## Context

Fizz buzz is a group word game for children to teach them about division. Players take turns to count incrementally, 
replacing any number divisible by three with the word "fizz", and any number divisible by five with the word "buzz".

For example, a typical round of fizz buzz would start as follows:

*1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, ...*

## Task

Implement `FizzBuzz` class that can play the game according to the rules described above. 

The expected output is something like this:

```php
$fizzBuzz = new FizzBuzz();
$output = $fizzBuzz->playUpTo(6);

$output = [1, 2, 'Fizz', '4', 'Buzz', 'Fizz'];
```
