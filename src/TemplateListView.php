<?php

/**
 * Abstract Class at src/TemplateListView.php.
 * File containing TemplateListView class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Abstract Class TemplateListView define pattern to be followed by child classes.
 * This class is an abstract class.
 * It uses the Template Method Design pattern
 * to generate the necessary view for the USSD.
 * @package Cybersai\USSD
 */
abstract class TemplateListView extends TemplateView implements ListView
{
    /** @var int $page Current Page Number */
    protected $page;
    /** @var int $number_per_page Total Number of Pages */
    protected $number_per_page;
    /** @var string $sub_title Sub Title of USSD menu */
    protected $sub_title = '';
    /** @var string $sub_footer Sub Footer of USSD menu */
    protected $sub_footer = '';

    protected function getSubTitle()
    {
        return $this->sub_title;
    }

    protected function getSubFooter()
    {
        return $this->sub_footer;
    }

    public final function parseListToString()
    {
        $msg = "";
        $start_index = ViewUtil::getListStartIndex($this->page, $this->number_per_page);
        $limit = ViewUtil::getListEndLimit($this->page, $this->number_per_page, $this->content);
        for($i = 0;$i < $limit;$i++) {
            $msg .= "{$this->getNumberingForIndex($i + $start_index)}{$this->getNumberingSeparator()}{$this->getListItemForIndex($i + $start_index)}{$this->getListSeparator()}";
        }
        return $msg;
    }

    /**
     * @inheritDoc
     */
    protected final function getBody()
    {
        return "{$this->sub_title}{$this->getSubTitleSeparator()}{$this->parseListToString()}{$this->getSubFooterSeparator()}{$this->sub_footer}";
    }
}