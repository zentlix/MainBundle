<?php

/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Zentlix to newer
 * versions in the future. If you wish to customize Zentlix for your
 * needs please refer to https://docs.zentlix.io for more information.
 */

declare(strict_types=1);

namespace Zentlix\MainBundle\Application\Command\Template;

use Zentlix\MainBundle\Domain\Template\Entity\Template;
use Zentlix\MainBundle\Infrastructure\Share\Bus\UpdateCommandInterface;

class UpdateCommand extends Command implements UpdateCommandInterface
{
    public function __construct(Template $template)
    {
        $this->entity = $template;
        $this->title  = $template->getTitle();
        $this->folder = $template->getFolder();
        $this->sort   = $template->getSort();
    }
}