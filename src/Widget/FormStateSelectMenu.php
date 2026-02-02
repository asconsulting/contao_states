<?php

/**
 * A basic US States and Canadian Provinces extensions for Contao CMS
 *
 * Copyright (C) 2021-2026 Andrew Stevens Consulting
 *
 * @package    asconsulting/contao_states
 * @link       https://andrewstevens.consulting
 */



namespace ContaoStates\Widget;

use Contao\FormSelect;
use ContaoStates\States;


class FormStateSelectMenu extends FormSelect
{

	/**
	 * Check whether an input is one of the given options
	 *
	 * @param mixed $varInput The input string or array
	 *
	 * @return boolean True if the selected option exists
	 */
	protected function isValidOption($varInput)
	{
		$blnIsValid = false;
		$arrOptions = $this->getOptions();
		
		foreach($arrOptions as $arrOption) {
			if ($arrOption['value'] ?? false == $varInput) {
				$blnIsValid = true;
			}
		}
		return $blnIsValid;
	}

	/**
	 * Generate the options
	 *
	 * @return array The options array
	 */
	protected function getOptions()
	{		
		$arrOptions = array();
		
		if ($this->includeBlankOption) {
			$arrOptions[] = array(
				'type'     => 'option',
				'value'    => null,
				'label'    => ($this->blankOptionLabel ? $this->blankOptionLabel : 'Select your state' .($this->includeCanada ? "/province" : ''))
			);
		}
		
		if ($this->includeCanada) {
			$arrOptions[] = array
			(
				'type'  => 'group_start',
				'label' => 'United States of America'
			);
		}
		
		foreach(States::getStates('us') as $strKey => $strState) {
			$arrOption = array
			(
				'type'     => 'option',
				'value'    => $strKey ?? null,
				'label'    => $strState ?? null
			);
			$arrOption['selected'] = $this->isSelected($arrOption);
			$arrOptions[] = $arrOption;
		}
		
		if ($this->includeCanada) {
			$arrOptions[] = array
			(
				'type' => 'group_end'
			);
			$arrOptions[] = array
			(
				'type'  => 'group_start',
				'label' => 'Canada'
			);
			foreach(States::getStates('ca') as $strKey => $strState) {
				$arrOption = array
				(
					'type'     => 'option',
					'value'    => $strKey ?? null,
					'label'    => $strState ?? null
				);
				$arrOption['selected'] = $this->isSelected($arrOption);
				$arrOptions[] = $arrOption;
			}
			$arrOptions[] = array
			(
				'type' => 'group_end'
			);
		}
		$this->arrOptions = $arrOptions;

		return $arrOptions;
	}

}
