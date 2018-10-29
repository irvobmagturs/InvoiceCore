<?php declare(strict_types=1);

namespace Irvobmagturs\InvoiceCore\Infrastructure;

interface EqualityTestable
{
    /**
     * @param mixed $other
     *
     * @return bool
     */
    function equals($other): bool;
}
