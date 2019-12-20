<?php

/**
 * Abstract class at src/TemplateView.php.
 * File containing abstract TemplateView class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\Ussd\Templates;

use Cybersai\Ussd\Interfaces\View;
use Cybersai\Ussd\Requests\UssdRequest;

/**
 * Abstract Class TemplateView define pattern to be followed by child classes.
 * This class is an abstract class.
 * It uses the Template Method Design pattern
 * to generate the necessary view for the Ussd.
 * @package Cybersai\Ussd
 */
abstract class TemplateView implements View
{
    /** @var string $content Content of the ussd view. */
    protected $content;
    /** @var string $title Title of the Ussd menu */
    protected $title = '';
    /** @var string $footer Footer of the Ussd menu */
    protected $footer = '';
    /** @var string $next ClassName of the next ussd view. */
    protected $next;
    /** @var UssdRequest $request Request object in view */
    protected $request;

    /**
     * TemplateView constructor.
     * @param UssdRequest $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    protected function getBody()
    {
        return $this->content;
    }

    /**
     * It generates the final output string for the ussd view.
     * @return string
     */
    public final function parseToString()
    {
        return "{$this->title}{$this->getSectionSeparatorOne()}{$this->getBody()}{$this->getSectionSeparatorTwo()}{$this->footer}";
    }

    /**
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }

    public final function forceEnd()
    {
        $this->next = null;
    }

    public function hasNext()
    {
        return $this->next !== null;
    }
}