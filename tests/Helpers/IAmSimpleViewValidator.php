<?php


namespace Cybersai\Tests\Helpers;


use Cybersai\Ussd\Templates\TemplateViewGroup;
use Cybersai\Ussd\Templates\TemplateViewValidator;

class IAmSimpleViewValidator extends TemplateViewValidator
{

    public function __construct($request)
    {
        $this->views = [
            (new IAmAView($this->request))->setContent('I am child 1'),
            (new IAmAView($this->request))->setContent('I am child 2'),];
        parent::__construct($request);
    }

    function getValidView()
    {
        return $this->views[$this->request->getUserInput() - 1];
    }

}