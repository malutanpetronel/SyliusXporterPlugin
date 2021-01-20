<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class XportCommand.
 *
 * @copyright Aquis Grana impex srl (http://www.webnou.ro/)
 * @author    Petronel Malutan <malutanpetronel@gmail.com>
 */
final class XportCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $this
            ->setName('aquis:xporter:info')
            ->setDescription('About the XPORTER plugin')
            ->setHelp(<<<EOT
Aquis Xporter plugin allow you tp creates a YAML dump for one or more <info>entities</info> 
and all related entities into friendly yaml files.
EOT
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('<comment>     Aquis Xporter plugin allow you to create YAML dump for one or more <info>entities</info>, specified
by a comma separated list of ids, with all related entities, into friendly yaml files.

    <question>bin/console  aquis:fixture:dump App\\Entity\\Product\\Product --ids=1,3 --debug=true</question>
    
    Please note that this plugin always export the admin users, so the result is always containing something even if your specified entity and id does not exist.
    
    Enjoy!
</comment>
'.PHP_EOL);

        return 0;
    }
}
