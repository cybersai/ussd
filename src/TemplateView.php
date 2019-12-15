<?php

/**
 * Abstract class at src/TemplateView.php.
 * File containing abstract TemplateView class.
 * @api
 * @author Isaac Adzah Sai
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Abstract Class TemplateView define pattern to be followed by child classes.
 * This class is an abstract class.
 * It uses the Template Method Design pattern
 * to generate the necessary view for the USSD.
 * @package Cybersai\USSD
 */
abstract class TemplateView implements View
{
    /** @var string $content Content of the ussd view. */
    protected $content;
    /** @var string $next ClassName of the next ussd view. */
    protected $next;

    /**
     * It returns the title of menu.
     * @return string
     */
    abstract protected function getTitle();

    /**
     * It returns the body of the menu.
     * @return string
     */
    abstract protected function getBody();

    /**
     * It returns the footer of the menu.
     * @return string
     */
    abstract protected function getFooter();

    /**
     * It generates the final output string for the ussd view.
     * @return string
     */
    public final function parseToString() {
        return "
            {$this->getTitle()}
            {$this->getSectionSeparatorOne()}
            {$this->getBody()}
            {$this->getSectionSeparatorTwo()}
            {$this->getFooter()}
        ";
    }

    /**
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }
}