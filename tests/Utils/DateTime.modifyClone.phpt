<?php

/**
 * Test: Nette\Utils\DateTime::modifyClone().
 */

declare(strict_types=1);

use Tester\Assert;
use Nette\Utils\DateTime;

require __DIR__ . '/../bootstrap.php';


date_default_timezone_set('Europe/Prague');

$date = DateTime::from(254400000);
$dolly = $date->modifyClone();
Assert::type(DateTime::class, $dolly);
Assert::notSame($date, $dolly);
Assert::same((string) $date, (string) $dolly);


$dolly2 = $date->modifyClone('+1 hour');
Assert::type(DateTime::class, $dolly2);
Assert::notSame($date, $dolly2);
Assert::notSame((string) $date, (string) $dolly2);
