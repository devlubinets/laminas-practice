<?php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class PracticeHttpController extends AbstractActionController
{
    public function testAction(): ViewModel
    {
        return new ViewModel(["routeInfo" => [
           "method" => $this->getRequest()->getMethod(),
           "requested_uri" => $this->getRequest()->getUriString(),
           "route_name" => $this->getEvent()->getRouteMatch()->getMatchedRouteName(),
           "route_params" => $this->getEvent()->getRouteMatch()->getParams(),
           "view_model_template" => $this->getEvent()->getViewModel()->getTemplate(),
           "view_model_variables" => $this->getEvent()->getViewModel()->getVariables(),
           "content" => $this->getRequest()->getContent(),
        ]]);
    }
}