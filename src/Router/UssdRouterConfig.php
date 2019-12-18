<?php


namespace Cybersai\USSD\Router;


use Cybersai\USSD\Templates\TemplateView;

class UssdRouterConfig
{
    const ALL = 'all';
    const NONE = 'none';
    protected $go_back_enabled;
    protected $go_to_beginning_enabled;
    protected $go_to_list_next_page_enabled;
    protected $go_to_list_previous_page_enabled;
    protected $go_back;
    protected $go_to_beginning;
    protected $go_to_list_next_page;
    protected $go_to_list_previous_page;
    protected $go_back_key;
    protected $go_to_beginning_key;
    protected $go_to_list_next_page_key;
    protected $go_to_list_previous_page_key;

    function __construct($go_back = null, $go_to_beginning = null, $go_to_list_next_page = null,
                         $go_to_list_previous_page = null)
    {
        $this->setConfig($this->go_back_enabled, $this->go_back, $this->go_back_key,
            $go_back);
        $this->setConfig($this->go_to_beginning_enabled, $this->go_to_beginning,
            $this->go_to_beginning_key, $go_to_beginning);
        $this->setConfig($this->go_to_list_next_page_enabled, $this->go_to_list_next_page,
            $this->go_to_list_next_page_key, $go_to_list_next_page);
        $this->setConfig($this->go_to_list_previous_page_enabled, $this->go_to_list_previous_page,
            $this->go_to_list_previous_page_key, $go_to_list_previous_page);
    }

    private function setConfig(&$bool_key, &$storage_value, &$storage_key, $value) {
        if ($value === null) {
            $bool_key = false;
        } else {
            $bool_key = true;
            if (is_string($value)) {
                $storage_key = $value;
            } else if (is_array($value)) {
                $keys = array_keys($value);
                $storage_key = strval($keys[0]);
                $storage_value = $value[$storage_key];
            } else {
                $bool_key = false;
            }
        }
    }

    private function enabledFor($bool_key, $storage_key, $storage_value, $view, $input) {
        if ($bool_key == true && $storage_key === $input) {
            if (is_string($storage_value)) {
                if ($storage_value == self::ALL) {
                    return true;
                } else if ($storage_value == get_class($view)) {
                    return true;
                } else {
                    return false;
                }
            } else if (is_array($storage_value)) {
                if (in_array(get_class($view), $storage_value)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * @param TemplateView $view
     * @param string $input
     * @return bool
     */
    function goBackEnabledFor($view, $input) {
        return $this->enabledFor($this->go_back_enabled, $this->go_back_key, $this->go_back, $view, $input);
    }

    /**
     * @param TemplateView $view
     * @param string $input
     * @return bool
     */
    function goToBeginningEnabledFor($view, $input) {
        return $this->enabledFor($this->go_to_beginning_enabled, $this->go_to_beginning_key, $this->go_to_beginning, $view,
            $input);
    }

    /**
     * @param TemplateView $view
     * @param string $input
     * @return bool
     */
    function goToListNextPageEnabledFor($view, $input) {
        return $this->enabledFor($this->go_to_list_next_page_enabled, $this->go_to_list_next_page_key,
            $this->go_to_list_next_page, $view, $input);
    }

    /**
     * @param TemplateView $view
     * @param string $input
     * @return bool
     */
    function goToListPreviousPageEnabledFor($view, $input) {
        return $this->enabledFor($this->go_to_list_previous_page_enabled, $this->go_to_list_previous_page_key,
            $this->go_to_list_previous_page, $view, $input);
    }
}