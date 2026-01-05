<?php

declare(strict_types=1);

namespace Solidwork\ContaoSolidCounterBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Dependency\DependentPluginInterface;
use Solidwork\ContaoSolidCounterBundle\ContaoSolidCounterBundle;

final class Plugin implements BundlePluginInterface, DependentPluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            (new BundleConfig(ContaoSolidCounterBundle::class))
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }

    public function getPackageDependencies(): array
    {
        return ['contao/core-bundle'];
    }
}
