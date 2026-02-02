<?php

/**
 * A basic US States and Canadian Provinces extensions for Contao CMS
 *
 * Copyright (C) 2021-2026 Andrew Stevens Consulting
 *
 * @package    asconsulting/contao_states
 * @link       https://andrewstevens.consulting
 */



namespace ContaoStates\ContaoManager;

use ContaoStates\ContaoStatesBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoStatesBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
