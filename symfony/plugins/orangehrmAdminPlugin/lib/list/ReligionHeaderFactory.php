<?php

class ReligionHeaderFactory extends ohrmListConfigurationFactory {
    protected function init() {

        $header1 = new ListHeader();
        $header2 = new ListHeader();

        $header1->populateFromArray(array(
            'name' => 'Religion',
            'elementType' => 'link',
            'filters' => array('I18nCellFilter' => array()
                              ),
            'elementProperty' => array(
                'labelGetter' => 'getName',
                'urlPattern' => 'javascript:'),
        ));
        
        $header2->populateFromArray(array(
        		'name' => 'Code',
        		'elementType' => 'label',
        		'filters' => array('I18nCellFilter' => array()
        		),
        		'elementProperty' => array('getter' => 'getCode'),
        ));

        $this->headers = array($header1, $header2);
    }

    public function getClassName() {
        return 'Religion';
    }
}

