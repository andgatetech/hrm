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
class SubjectForm extends BaseForm {
    private $subjectService;

    public function getSubjectService() {
        if (is_null($this->subjectService)) {
            $this->subjectService = new SubjectService();
            $this->subjectService->setSubjectDao(new SubjectDao());
        }
        return $this->subjectService;
    }

    public function configure() {

        $this->setWidgets(array(
            'subjectId' => new sfWidgetFormInputHidden(),
        	'code' => new sfWidgetFormInputText(),
            'name' => new sfWidgetFormInputText()
        ));

        $this->setValidators(array(
            'subjectId' => new sfValidatorNumber(array('required' => false)),
            'code' => new sfValidatorString(array('required' => true, 'max_length' => 10)),
        	'name' => new sfValidatorString(array('required' => true, 'max_length' => 100))
        ));

        $this->widgetSchema->setNameFormat('subject[%s]');
    }

    public function save() {

        $subjectId = $this->getValue('subjectId');
        if (!empty($subjectId)) {
            $subject = $this->getSubjectService()->getSubjectById($subjectId);
        } else {
            $subject = new Subject();
        }
        $subject->setCode($this->getValue('code'));
        $subject->setName($this->getValue('name'));
        $subject->save();
    }

    public function getSubjectListAsJson() {

        $list = array();
        $subjectList = $this->getSubjectService()->getSubjectList();
        foreach ($subjectList as $subject) {
            $list[] = array('id' => $subject->getId(), 'code' => $subject->getCode(), 'name' => $subject->getName());
        }
        return json_encode($list);
    }
}

