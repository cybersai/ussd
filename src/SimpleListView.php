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
    function getListSeparator()
    {
        return "\n";
    }

    function getNumberingSeparator()
    {
        return ". ";
    }

    function getNumberingForIndex($index)
    {
        return $index + 1;
    }

    function getSubFooterSeparator()
    {
        return "\n";
    }

    function getSubFooter()
    {
        return "";
    }

    protected function getSubTitle()
    {
        return "";
    }

    public function getSubTitleSeparator()
    {
        return "";
    }

    protected function getTitle()
    {
        return $this->title;
    }

    protected function getFooter()
    {
        $msg = "";
        if (ViewUtil::isFirstPage($this->page)) {
            $msg .= "00. Next Page\n";
        }
        if (ViewUtil::isLastPage($this->page, $this->number_per_page, $this->list)) {
            $msg .= "*. Previous Page\n";
        }
        return $msg;
    }

    function getSectionSeparatorOne()
    {
        return "\n";
    }

    function getSectionSeparatorTwo()
    {
        return "\n";
    }

}