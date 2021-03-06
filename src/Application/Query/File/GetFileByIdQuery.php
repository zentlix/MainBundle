<?php

/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Zentlix to newer
 * versions in the future. If you wish to customize Zentlix for your
 * needs please refer to https://docs.zentlix.io for more information.
 */

declare(strict_types=1);

namespace Zentlix\MainBundle\Application\Query\File;

use Zentlix\MainBundle\Infrastructure\Share\Bus\QueryInterface;

class GetFileByIdQuery implements QueryInterface
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
}