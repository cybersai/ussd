<?php


namespace Cybersai\Ussd\Router;


use Cybersai\Ussd\Exceptions\ViewNotFoundException;
use Cybersai\Ussd\Requests\UssdRequest;
use Cybersai\Ussd\Templates\TemplateView;
use Cybersai\Ussd\Templates\TemplateViewGroup;
use Cybersai\Ussd\Templates\TemplateViewValidator;

class UssdRouter
{
    /** @var UssdRequest $request */
    private $request;
    /** @var UssdRouterConfig $config */
    private $config;

    /**
     * UssdRouter constructor.
     * @param UssdRequest $request
     * @param UssdRouterConfig $config
     */
    public function __construct($request, $config)
    {
        $this->request = $request;
        $this->config = $config;
    }

    /**
     * @deprecated
     * @param string $user_input
     */
    public function acceptUserInput($user_input) {
        $this->request->setUserInput($user_input);
    }

    public function getNextInput() {
        return $this->request->getUserInput();
    }

    /**
     * @param string $user_input
     * @return TemplateView
     * @throws ViewNotFoundException
     */
    public function route($user_input = null)
    {
        if ($user_input !== null) {
            $this->request->setUserInput($user_input);
        }
        $view = $this->request->getLastView();
        $view = $this->validateView($view);
        $next_view_name = $view->getNext();
        $object = new $next_view_name($this->request);
        while (!$object instanceof TemplateView) {
            if ($object instanceof TemplateViewGroup) {
                $object = $object->getSelectedView();
                continue;
            } else if ($object instanceof TemplateViewValidator) {
                $object = $object->getValidView();
                continue;
            }
            throw new ViewNotFoundException();
        }
        return $object;
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
        }

        if ($this->request->getPage() !== 1) {
            $this->request->resetPageNumber();
        }

        return $view;
    }
}