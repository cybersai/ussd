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
abstract class TitledWithFooterView extends TitledView
{
    /** @var string $footer Footer of the USSD menu */
    protected $footer;

    /**
     * TitledView constructor.
     * @param string $title
     * @param string $content
     * @param string $footer
     * @param string $next
     */
    public function __construct($title, $content, $footer, $next)
    {
        $this->footer = $footer;
        parent::__construct($title, $content, $next);
    }

    protected function getFooter()
    {
        return $this->footer;
    }
}