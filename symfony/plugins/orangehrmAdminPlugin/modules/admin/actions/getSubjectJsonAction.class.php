<?php

class getSubjectJsonAction extends sfAction {

    public function execute($request) {

        $this->setLayout(false);
        sfConfig::set('sf_web_debug', false);
        sfConfig::set('sf_debug', false);

        if ($this->getRequest()->isXmlHttpRequest()) {
            $this->getResponse()->setHttpHeader('Content-Type', 'application/json; charset=utf-8');
        }

        $subjectId = $request->getParameter('id');

        $service = new SubjectService();
        $subject = $service->getSubjectById($subjectId);

        return $this->renderText(json_encode($subject->toArray()));
    }

}

