<?php
namespace DrdPlus\Person\Background\BackgroundParts\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;

class AncestryType extends IntegerEnumType
{
    const ANCESTRY = 'ancestry';

    /**
     * @return string
     */
    public function getName()
    {
        return self::ANCESTRY;
    }
}