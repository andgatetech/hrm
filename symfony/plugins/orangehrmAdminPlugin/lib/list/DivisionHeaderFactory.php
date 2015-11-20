<?php

class DivisionHeaderFactory extends ohrmListConfigurationFactory {
    protected function init() {

        $header1 = new ListHeader();
        $header2 = new ListHeader();
        $header3 = new ListHeader();

        $header1->populateFromArray(array(
            'name' => 'Division',
            'elementType' => 'link',
            'filters' => array('I18nCellFilter' => array()
                              ),
            'elementProperty' => array(
                'labelGetter' => 'getDivisionName',
                'urlPattern' => 'javascript:'),
        ));
        
        $header2->populateFromArray(array(
        		'name' => 'Code',
        		'elementType' => 'label',
        		'filters' => array('I18nCellFilter' => array()
        		),
        		'elementProperty' => array('getter' => 'getDivisionCode'),
        ));
        $header3->populateFromArray(array(
        		'name' => 'Country',
        		'elementType' => 'label',
        		'filters' => array('I18nCellFilter' => array()
        		),
        		'elementProperty' => array('getter' => 'getCouCode'),
        ));

        $this->headers = array($header1, $header2, $header3);
    }

    public function getClassName() {
        return 'Division';
    }
}

