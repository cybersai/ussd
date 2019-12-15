<?php

/**
 * Class at src/SimpleView.php.
 * File containing SimpleView class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Class SimpleView help to create a simple ussd view.
 * It inherits from the abstract View Class and generates
 * a view with just a body without title or footer.
 * @package Cybersai\USSD
 */
class SimpleView extends TemplateView
{

    /**
     * SimpleView constructor.
     * @param string $content
     * @param string $next
     */
    public function __construct($content, $next)
    {
        $this->content = $content;
        $this->next = $next;
    }

    /**
     * Implement getTitle of TemplateView.
     * @return string
     */
    protected function getTitle()
    {
        return "";
    }

    /**
     * Implement getSectionSeparatorOne of View.
     * @return string
     */
    public function getSectionSeparatorOne()
    {
        return "";
    }

    /**
     * It returns the body of the menu.
     * @return string
     */
    protected function getBody() {
        return $this->content;
    }

    /**
     * Implement getSectionSeparatorTwo of View.
     * @return string
     */
    public function getSectionSeparatorTwo()
    {
        return "";
    }

    /**
     * Implement getFooter of TemplateView.
     * @return string
     */
    protected function getFooter()
    {
        return "";
    }
}