<?php

class getReligionJsonAction extends sfAction {

    public function execute($request) {

        $this->setLayout(false);
        sfConfig::set('sf_web_debug', false);
        sfConfig::set('sf_debug', false);

        if ($this->getRequest()->isXmlHttpRequest()) {
            $this->getResponse()->setHttpHeader('Content-Type', 'application/json; charset=utf-8');
        }

        $religionId = $request->getParameter('id');

        $service = new ReligionService();
        $religion = $service->getReligionsById($religionId);

        return $this->renderText(json_encode($nationality->toArray()));
    }

}

