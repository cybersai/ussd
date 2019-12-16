<?php


namespace Cybersai\USSD\Router;


use Cybersai\USSD\Requests\USSDRequest;

class USSDRouter
{
    /** @var USSDRequest $request */
    private $request;

    /**
     * USSDRouter constructor.
     * @param USSDRequest $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function route()
    {
        $view = $this->request->getNextView();
        $next_view_name = $view->getNext();
        return new $next_view_name($this->request);
    }
}