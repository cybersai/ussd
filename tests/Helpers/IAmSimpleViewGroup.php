<?php


namespace Cybersai\Tests\Helpers;


use Cybersai\Ussd\Templates\TemplateViewGroup;

class IAmSimpleViewGroup extends TemplateViewGroup
{

    public function __construct($request)
    {
        $this->views = [
            (new IAmAView($this->request))->setContent('I am child 1'),
            (new IAmAView($this->request))->setContent('I am child 2'),];
        parent::__construct($request);
    }

    function getSelectedView()
    {
        return $this->views[$this->request->getUserInput() - 1];
    }

}