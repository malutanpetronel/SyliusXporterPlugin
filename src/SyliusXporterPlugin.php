<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class SyliusXporterPlugin.
 *
 * @copyright Aquis Grana impex srl (http://www.webnou.ro/)
 * @author    Petronel Malutan <malutanpetronel@gmail.com>
 */
final class SyliusXporterPlugin extends Bundle
{
    use SyliusPluginTrait;
}
