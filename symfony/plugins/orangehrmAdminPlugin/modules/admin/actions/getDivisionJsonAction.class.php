<?php

class getDivisionJsonAction extends sfAction {

    public function execute($request) {

        $this->setLayout(false);
        sfConfig::set('sf_web_debug', false);
        sfConfig::set('sf_debug', false);

        if ($this->getRequest()->isXmlHttpRequest()) {
            $this->getResponse()->setHttpHeader('Content-Type', 'application/json; charset=utf-8');
        }

        $divisionId = $request->getParameter('id');

        $service = new DivisionService();
        $division = $service->getDivisionById($divisionId);

        return $this->renderText(json_encode($division->toArray()));
    }

}

