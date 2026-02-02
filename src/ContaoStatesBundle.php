<?php

/**
 * A basic US States and Canadian Provinces extensions for Contao CMS
 *
 * Copyright (C) 2021-2026 Andrew Stevens Consulting
 *
 * @package    asconsulting/contao_states
 * @link       https://andrewstevens.consulting
 */



namespace ContaoStates;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;


class ContaoStatesBundle extends AbstractBundle
{
	
    public function loadExtension(
        array $config, 
        ContainerConfigurator $containerConfigurator, 
        ContainerBuilder $containerBuilder,
    ): void
    {
        $containerConfigurator->import('../config/services.yaml');
    }
	
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
