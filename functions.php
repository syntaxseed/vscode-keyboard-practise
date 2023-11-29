<?php

/*
 * This is a comment
 */
function checkName(string $argument): bool
{
    $firstName = 'Jane';
    $lastName = 'Doe';

    $fullName = $firstName . ' ' . $lastName;

    if ($fullName == $argument) {
        return true;
    }

    return false;
}

function add(int $a, int $b): int
{
    return $a + $b;
}
