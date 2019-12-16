<?php

/**
 * Class at src/TitledView.php.
 * File containing TitledView class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Class TitledView help to create a simple ussd view with titles.
 * It inherits from the Simple View Class and generates
 * a view with just a body without title only.
 * @package Cybersai\USSD
 */
abstract class TitledView extends TemplateView
{
    /** @var string $title Title of the USSD menu */
    protected $title;

    /**
     * TitledView constructor.
     * @param string $title
     * @param string $content
     * @param string $next
     */
    public function __construct($title, $content, $next)
    {
        $this->title = $title;
        $this->content = $content;
        $this->next = $next;
    }


    /**
     * Override the getTitle of SimpleView.
     * @return string
     */
    protected function getTitle()
    {
        return $this->title;
    }

    protected function getFooter()
    {
        return "";
    }

    protected function getBody()
    {
        return $this->content;
    }
}