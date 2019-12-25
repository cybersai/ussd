<?php


namespace Cybersai\Tests\Helpers;


use Cybersai\Ussd\Templates\TemplateViewGroup;

class IAmSimpleNestedViewGroup3 extends TemplateViewGroup
{

    public function __construct($request)
    {
        $this->views = [
            (new IAmAView($this->request))->setContent('I am nested child 3-1'),
            (new IAmAView($this->request))->setContent('I am nested child 3-2'),];
        parent::__construct($request);
    }

    function getSelectedView()
    {
        return $this->views[$this->request->getUserInput() - 1];
    }

}