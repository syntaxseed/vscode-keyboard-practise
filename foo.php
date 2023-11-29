<?php

namespace Vendor\Package;

require('functions.php');

class Foo
{
    public function sampleMethod(int $arg1, int $arg2 = 5)
    {
        if ($arg1 === $arg2) {
            $result = add(5, 6);
        } elseif ($arg1 > $arg2) {
            $this->bar($arg1);
        } else {
            $this::bar($arg2);
        }
    }

    final public static function bar(int $expr): string
    {
        switch ($expr) {
            case 0:
                echo 'First case, with a break';
                break;
            case 1:
                echo 'Second case, which falls through';
                // no break
            case 2:
            case 3:
            case 4:
                echo 'Third case, return instead of break';
                return 'Third';
            default:
                echo 'Default case';
                break;
        }

        return 'Complete';
    }
}
