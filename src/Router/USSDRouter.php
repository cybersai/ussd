<?php


namespace Cybersai\USSD\Router;


use Cybersai\USSD\Requests\USSDRequest;
use Cybersai\USSD\Templates\TemplateView;

class USSDRouter
{
    /** @var USSDRequest $request */
    private $request;
    /** @var USSDRouterConfig $config */
    private $config;
    /** @var string $next_input */
    private $next_input = null;

    /**
     * USSDRouter constructor.
     * @param USSDRequest $request
     * @param USSDRouterConfig $config
     */
    public function __construct($request, $config)
    {
        $this->request = $request;
        $this->config = $config;
    }

    public function acceptUserInput($user_input) {
        $this->next_input = $user_input;
    }

    public function getNextInput() {
        return $this->next_input;
    }

    public function route()
    {
        $view = $this->request->getLastView();
        $view = $this->validateView($view);
        $next_view_name = $view->getNext();
        return new $next_view_name($this->request);
    }

    /**
     * @param TemplateView $view
     * @return TemplateView
     */
    private function validateView($view) {
        if ($this->config->goBackEnabledFor($view, $this->next_input)) {
            $this->request->processBack();
            return $this->request->getLastView();
        }
        return $view;
    }
}