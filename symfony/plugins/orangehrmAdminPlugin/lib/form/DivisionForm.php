<?php

/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 *
 */
class DivisionForm extends BaseForm {
    private $divisionService;
    private $countryService;

    public function getDivisionService() {
        if (is_null($this->divisionService)) {
            $this->divisionService = new DivisionService();
            $this->divisionService->setDivisionDao(new DivisionDao());
        }
        return $this->divisionService;
    }
    public function getCountryService() {
    	if (is_null($this->countryService)) {
    		$this->countryService = new CountryService();
    		$this->countryService->setCountryDao(new CountryDao());
    	}
    	return $this->countryService;
    }

    public function configure() {
    	$countryList = $this->getCountryList();

        $this->setWidgets(array(
            'divisionId' => new sfWidgetFormInputHidden(),
            'name' => new sfWidgetFormInputText(),
        	'code' => new sfWidgetFormInputText(),
        	'country' => new sfWidgetFormSelect(array('choices' => $countryList))
        ));

        $this->setValidators(array(
            'religionId' => new sfValidatorNumber(array('required' => false)),
            'code' => new sfValidatorString(array('required' => true, 'max_length' => 10)),
        	'name' => new sfValidatorString(array('required' => true, 'max_length' => 100))
        ));

        $this->widgetSchema->setNameFormat('division[%s]');
    }

    public function save() {

        $divisionId = $this->getValue('divisionId');
        if (!empty($divisionId)) {
            $division = $this->getDivisionService()->getdivisionById($divisionId);
        } else {
            $division = new Division();
        }
        $division->setDivisionName($this->getValue('name'));
        $division->setDivisionCode($this->getValue('code'));
        $division->setCouCode($this->getValue('countryCode'));
        $division->save();
    }
    
    /**
     * Returns Country List
     * @return array
     */
    private function getCountryList() {
    	$list = array(0 => "-- " . __('Select') . " --");
    	$countries = $this->getCountryService()->getCountryList();
    	foreach ($countries as $country) {
    		$list[$country->cou_code] = $country->cou_name;
    	}
    	return $list;
    }

    public function getDivisionListAsJson() {

        $list = array();
        $divisionList = $this->getDivisionService()->getDivisionList();
        foreach ($divisionList as $division) {
            $list[] = array(
            		'id' => $division->getId(), 
            		'name' => $division->getDivisionName(), 
            		'code' => $division->getDivisionCode(), 
            		'countryCode' => $division->getCouCode()
            		
            );
        }
        return json_encode($list);
    }
}

