<?php


namespace Cybersai\USSD\Router;


use Cybersai\USSD\Exceptions\ViewNotFound;
use Cybersai\USSD\Requests\USSDRequest;
use Cybersai\USSD\Templates\TemplateView;
use Cybersai\USSD\Templates\TemplateViewGroup;
use Cybersai\USSD\Templates\TemplateViewValidator;

class USSDRouter
{
    /** @var USSDRequest $request */
    private $request;
    /** @var USSDRouterConfig $config */
    private $config;

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
        $this->request->setUserInput($user_input);
    }

    public function getNextInput() {
        return $this->request->getUserInput();
    }

    /**
     * @return TemplateView
     * @throws ViewNotFound
     */
    public function route()
    {
        // TODO: Make route accept ViewGroup and ViewValidator
        $view = $this->request->getLastView();
        $view = $this->validateView($view);
        $next_view_name = $view->getNext();
        $object = new $next_view_name($this->request);
        if ($object instanceof TemplateView) {
            return $object;
        } else if ($object instanceof TemplateViewGroup) {
            return $object->getSelectedView();
        } else if ($object instanceof TemplateViewValidator) {
            return $object->getValidView();
        } else {
            throw new ViewNotFound();
        }
    }

    /**
     * @param TemplateView $view
     * @return TemplateView
     */
    private function validateView($view) {
        if ($this->config->goBackEnabledFor($view, $this->request->getUserInput())) {
            $this->request->processBack();
            return $this->request->getLastView();
        } else if ($this->config->goToBeginningEnabledFor($view, $this->request->getUserInput())) {
            $this->request->processBeginning();
            return $this->request->getLastView();
        } else if ($this->config->goToListNextPageEnabledFor($view, $this->request->getUserInput())) {
            $this->request->processNext();
            return $this->request->getLastView();
        } else if ($this->config->goToListPreviousPageEnabledFor($view, $this->request->getUserInput())) {
            $this->request->processPrevious();
            return $this->request->getLastView();
        } else {
            if ($this->request->getPage() !== 1) {
                $this->request->resetPageNumber();
            }
        }
        return $view;
    }
}