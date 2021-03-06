<?php

/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Zentlix to newer
 * versions in the future. If you wish to customize Zentlix for your
 * needs please refer to https://docs.zentlix.io for more information.
 */

declare(strict_types=1);

namespace Zentlix\MainBundle\Domain\Attribute\Service;

use Zentlix\MainBundle\Domain\Attribute\Type\AttributeTypeInterface;

class AttributeTypes
{
    /** @var AttributeTypeInterface[] */
    private array $types = [];

    public function __construct(iterable $types)
    {
        foreach ($types as $type) {
            $this->addType($type);
        }
    }

    public function getTypes(): array
    {
        return $this->types;
    }

    public function getByCode(string $code): AttributeTypeInterface
    {
        if(!isset($this->types[$code])) {
            throw new \DomainException(sprintf('Attribute type %s not found!', $code));
        }

        return $this->types[$code];
    }

    private function addType(AttributeTypeInterface $type): void
    {
        if(isset($this->types[$type::getCode()])) {
            throw new \DomainException(sprintf('Attribute type %s already exist!', $type::getCode()));
        }

        $this->types[$type::getCode()] = $type;
    }
}