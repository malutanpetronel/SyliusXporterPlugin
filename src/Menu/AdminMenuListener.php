<?php

namespace Aquis\XporterPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;
use Symfony\Component\Translation\Translator;

/**
 * Class AdminMenuListener.
 *
 * @copyright Aquis Grana impex srl (http://www.webnou.ro/)
 * @author    Petronel Malutan <malutanpetronel@gmail.com>
 */
final class AdminMenuListener
{
    /**
     * @var Translator
     */
    private $translator;

    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $key = $this->translator->trans('sylius_xporter_plugin.ui.plugin.key');
        $newSubmenu = $menu->addChild($key)->setLabel($this->translator->trans('sylius_xporter_plugin.ui.plugin.owner_name'));

        $newSubmenu->addChild($key.'xporter-subitem', ['route' => 'aquis.xporter_plugin.about'])
            ->setLabel($this->translator->trans('sylius_xporter_plugin.ui.plugin.name'))
            ->setLabelAttribute('icon', 'star')
        ;
    }
}
