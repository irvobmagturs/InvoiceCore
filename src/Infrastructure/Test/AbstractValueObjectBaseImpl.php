<?php declare(strict_types=1);
/**
 * @author I. R. Vobmagturs <i+r+vobmagturs@commodea.com>
 */

namespace Irvobmagturs\InvoiceCore\Infrastructure\Test;

use Irvobmagturs\InvoiceCore\Infrastructure\AbstractValueObjectBase;
use Irvobmagturs\InvoiceCore\Infrastructure\Serializable;

class AbstractValueObjectBaseImpl extends AbstractValueObjectBase
{
    /**
     * @param array $data
     * @return self
     */
    static function deserialize(array $data): Serializable
    {
        return new static();
    }

    /**
     * @return array
     */
    function serialize(): array
    {
        return [];
    }
}
