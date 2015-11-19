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

    public function getDivisionService() {
        if (is_null($this->divisionService)) {
            $this->divisionService = new DivisionService();
            $this->divisionService->setDivisionDao(new DivisionDao());
        }
        return $this->divisionService;
    }

    public function configure() {

        $this->setWidgets(array(
            'divisionId' => new sfWidgetFormInputHidden(),
            'name' => new sfWidgetFormInputText(),
        	'code' => new sfWidgetFormInputText(),
        	'countryCode' => new sfWidgetFormInputText()
        ));

        $this->setValidators(array(
            'divisionId' => new sfValidatorNumber(array('required' => false)),
            'name' => new sfValidatorString(array('required' => true, 'max_length' => 100)),
        	'code' => new sfValidatorString(array('required' => false, 'max_length' => 10)),
        	'countryCode' => new sfValidatorString(array('required' => false, 'max_length' => 10))
        ));

        $this->widgetSchema->setNameFormat('division[%s]');
    }

    public function save() {

        $divisionId = $this->getValue('divisionId');
        if (!empty($divisionId)) {
            $division = $this->getDivisionService()->getReligionById($religionId);
        } else {
            $religion = new Religion();
        }
        $religion->setCode($this->getValue('code'));
        $religion->setName($this->getValue('name'));
        $religion->save();
    }

    public function getReligionListAsJson() {

        $list = array();
        $religionList = $this->getReligionService()->getReligionList();
        foreach ($religionList as $religion) {
            $list[] = array('id' => $religion->getId(), 'code' => $religion->getCode(), 'name' => $religion->getName());
        }
        return json_encode($list);
    }
}

