<?php

/**
 * A basic US States and Canadian Provinces extensions for Contao CMS
 *
 * Copyright (C) 2021-2026 Andrew Stevens Consulting
 *
 * @package    asconsulting/contao_states
 * @link       https://andrewstevens.consulting
 */



/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'includeBlankOption';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['stateSelect'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,multiple,includeBlankOption,includeCanada;{expert_legend:hide},class,accesskey,tabindex;{template_legend:hide},customTpl;{invisible_legend:hide},invisible';

$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['includeBlankOption'] = 'blankOptionLabel';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['includeCanada'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['includeCanada'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'clr w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['includeBlankOption'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['includeBlankOption'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['blankOptionLabel'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['blankOptionLabel'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
