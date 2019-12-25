<?php


namespace Cybersai\Tests\Helpers;


use Cybersai\Ussd\Templates\TemplateViewGroup;

class IAmAViewGroup extends TemplateViewGroup
{

    public function __construct($request)
    {
        $this->views = [];
        parent::__construct($request);
    }

    function getSelectedView()
    {
        return $this->views[0];
    }

    function addView($view)
    {
        array_push($this->views, $view);
    }
}