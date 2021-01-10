<?php

/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Zentlix to newer
 * versions in the future. If you wish to customize Zentlix for your
 * needs please refer to https://docs.zentlix.io for more information.
 */

declare(strict_types=1);

namespace Zentlix\MainBundle\Application\Command\Attribute;

use Zentlix\MainBundle\Domain\Attribute\Entity\Attribute;
use Zentlix\MainBundle\Infrastructure\Share\Bus\UpdateCommandInterface;

class UpdateCommand extends Command implements UpdateCommandInterface
{
    public function __construct(Attribute $attribute)
    {
        $this->entity = $attribute;

        $this->title           = $attribute->getTitle();
        $this->code            = $attribute->getCode();
        $this->sort            = $attribute->getSort();
        $this->active          = $attribute->isActive();
        $this->editable        = $attribute->isEditable();
        $this->attributeEntity = $attribute->getEntity();
        $this->config          = $attribute->getConfig();
    }
}