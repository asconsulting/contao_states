<?php

/**
 * A basic States extensions for Contao CMS 4.9+
 *
 * Copyright (C) 2021 Andrew Stevens Consulting
 *
 * @package    asconsulting/contao_states
 * @link       https://andrewstevens.consulting
 */




namespace Contao;


class States
{

	/**
	 * Return the states as array
	 *
	 * @return array An array of state names
	 */
	public static function getStates($strCountry = 'us')
	{
		$return = array();
		$countries = array();
		$arrAux = array();

		System::loadLanguageFile('states');
		include TL_ROOT .'/system/modules/contao_states/config/states.php';

		foreach ($arrStates[$strCountry] as $strKey=>$strName)
		{
			$arrAux[$strKey] = isset($GLOBALS['TL_LANG']['STATES'][$strKey]) ? Utf8::toAscii($GLOBALS['TL_LANG']['STATES'][$strKey]) : $strName;
		}

		asort($arrAux);

		foreach (array_keys($arrAux) as $strKey)
		{
			$return[$strKey] = $GLOBALS['TL_LANG']['STATES'][$strCountry][$strKey] ?? $arrStates[$strCountry][$strKey];
		}

		// HOOK: add custom logic
		if (isset($GLOBALS['TL_HOOKS']['getStates']) && \is_array($GLOBALS['TL_HOOKS']['getStates']))
		{
			foreach ($GLOBALS['TL_HOOKS']['getStates'] as $callback)
			{
				static::importStatic($callback[0])->{$callback[1]}($return,  $arrStates, $strCountry);
			}
		}

		return $return;
	}

}

class_alias(States::class, 'States');
