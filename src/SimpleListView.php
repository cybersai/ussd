<?php

/**
 * Class at src/SimpleListView.php.
 * File containing SimpleListView class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Class SimpleListView helps to create simple ussd list view.
 * It inherits from the abstract TemplateListView Class and generates
 * a view with title, a numbered list and list footer.
 * @package Cybersai\USSD
 */
class SimpleListView extends TemplateListView
{

    // TODO: make function static
    /**
     * SimpleListView constructor.
     * @param string $title
     * @param int $page
     * @param int $number_per_page
     * @param string[] $list
     * @param string $next
     */
    public function __construct($title, $page, $number_per_page, $list, $next)
    {
        $this->title = $title;
        $this->page = $page;
        $this->number_per_page = $number_per_page;
        $this->list = $list;
        $this->next = $next;
    }

    function getNumberingForIndex($index)
    {
        return $index + 1;
    }

    function getListItemForIndex($index)
    {
        return $this->list[$index];
    }

    function getSubFooterSeparator()
    {
        return Separator::NO_LINE_BREAK;
    }

    function getSubFooter()
    {
        $msg = "";
        if (!ViewUtil::isLastPage($this->page, $this->number_per_page, $this->list)) {
            $msg .= "00{$this->getNumberingSeparator()}Next Page\n";
        }
        if (!ViewUtil::isFirstPage($this->page)) {
            $msg .= "*{$this->getNumberingSeparator()}Previous Page\n";
        }
        return $msg;
    }

    protected function getSubTitle()
    {
        return "";
    }

    public function getSubTitleSeparator()
    {
        return Separator::NO_LINE_BREAK;
    }

    protected function getTitle()
    {
        return $this->title;
    }

    protected function getFooter()
    {
        $msg = "";
        if (!ViewUtil::isLastPage($this->page, $this->number_per_page, $this->list)) {
            $msg .= "00{$this->getNumberingSeparator()}Next Page\n";
        }
        if (!ViewUtil::isFirstPage($this->page)) {
            $msg .= "*{$this->getNumberingSeparator()}Previous Page\n";
        }
        return $msg;
    }
}