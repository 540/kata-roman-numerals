<?php

namespace Deg540\CleanCodeKata9;

class Example
{
    /**
     * @param $value
     *
     * @return bool
     */
    function integerChecker($value): bool {
        return is_integer($value);
    }
}