<?php


namespace Cybersai\Ussd\Router;


use Cybersai\Ussd\Templates\TemplateView;

class UssdRouterConfig
{
    const ALL = 'all';
    const NONE = 'none';
    protected $back_enabled;
    protected $beginning_enabled;
    protected $next_enabled;
    protected $previous_enabled;
    protected $back;
    protected $beginning;
    protected $next;
    protected $previous;
    protected $back_key;
    protected $beginning_key;
    protected $next_key;
    protected $previous_key;

    function __construct($back = null, $beginning = null, $next = null, $previous = null)
    {
        $this->setConfig($this->back_enabled, $this->back, $this->back_key,
            $back);
        $this->setConfig($this->beginning_enabled, $this->beginning,
            $this->beginning_key, $beginning);
        $this->setConfig($this->next_enabled, $this->next,
            $this->next_key, $next);
        $this->setConfig($this->previous_enabled, $this->previous,
            $this->previous_key, $previous);
    }

    private function setConfig(&$bool_key, &$storage_value, &$storage_key, $value) {
        if ($value === null) {
            $bool_key = false;
            return;
        }
        $bool_key = true;
        if (is_string($value)) {
            $storage_key = $value;
            return;
        } else if (is_array($value)) {
            $keys = array_keys($value);
            $storage_key = (string)$keys[0];
            $storage_value = $value[$storage_key];
            return;
        }
        $bool_key = false;
    }

    private function enabledFor($bool_key, $storage_key, $storage_value, $view, $input) {
        if ($bool_key == true && $storage_key === $input) {
            if (is_string($storage_value)) {
                if ($storage_value == self::ALL) {
                    return true;
                } else if ($storage_value == get_class($view)) {
                    return true;
                }
                return false;
            } else if (is_array($storage_value)) {
                if (in_array(get_class($view), $storage_value)) {
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }

    /**
     * @param TemplateView $view
     * @param string $input
     * @return bool
     */
    function goBackEnabledFor($view, $input) {
        return $this->enabledFor($this->back_enabled, $this->back_key, $this->back, $view, $input);
    }

    /**
     * @param TemplateView $view
     * @param string $input
     * @return bool
     */
    function goToBeginningEnabledFor($view, $input) {
        return $this->enabledFor($this->beginning_enabled, $this->beginning_key, $this->beginning, $view,
            $input);
    }

    /**
     * @param TemplateView $view
     * @param string $input
     * @return bool
     */
    function goToListNextPageEnabledFor($view, $input) {
        return $this->enabledFor($this->next_enabled, $this->next_key,
            $this->next, $view, $input);
    }

    /**
     * @param TemplateView $view
     * @param string $input
     * @return bool
     */
    function goToListPreviousPageEnabledFor($view, $input) {
        return $this->enabledFor($this->previous_enabled, $this->previous_key,
            $this->previous, $view, $input);
    }
}