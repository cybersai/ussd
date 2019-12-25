<?php


namespace Cybersai\Tests\Helpers;


use Cybersai\Ussd\Templates\TemplateViewGroup;

class IAmSimpleNestedViewGroup1 extends TemplateViewGroup
{

    public function __construct($request)
    {
        $this->views = [
            new IAmSimpleNestedViewGroup2($request),
            new IAmSimpleNestedViewGroup2($request),];
        parent::__construct($request);
    }

    function getSelectedView()
    {
        return $this->views[$this->request->getUserInput() - 1];
    }

}