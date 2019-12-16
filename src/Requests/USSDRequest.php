<?php


namespace Cybersai\USSD\Requests;


use Cybersai\USSD\Templates\TemplateView;

class USSDRequest
{
    protected $session_id;
    protected $user_input;
    protected $MSISDN;
    protected $network;
    protected $page = 1;
    protected $history = [];
    protected $payload = [];

    /**
     * USSDRequest constructor.
     * @param string $session_id
     * @param string $MSISDN
     * @param string $network
     * @param string $user_input
     */
    public function __construct($session_id, $MSISDN, $network, $user_input)
    {
        $this->session_id = $session_id;
        $this->MSISDN = $MSISDN;
        $this->network = $network;
        $this->user_input = $user_input;
    }

    public function incrementPageNumber() {
        $this->page = $this->page + 1;
    }

    public function decrementPageNumber() {
        $this->page = $this->page - 1;
    }

    /**
     * @return string
     */
    public function snapshotHistory() {
        return serialize($this);
    }

    /**
     * @param $snapshot
     * @return USSDRequest
     */
    public static function createFromSnapshot($snapshot) {
        return unserialize($snapshot);
    }

    /**
     * @param TemplateView $object
     */
    public function addHistory($object) {
        array_push($this->history, $object);
    }

    /**
     * @param string $key
     * @param $object
     */
    public function addParameter($key, $object) {
        $this->payload[$key] = $object;
    }

    public function getParameter($key) {
        return $this->payload[$key];
    }

    public function getNextView() {
        return end($this->history);
    }

    /**
     * @param string $user_input
     */
    public function setUserInput($user_input)
    {
        $this->user_input = $user_input;
    }


    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * @return string
     */
    public function getUserInput()
    {
        return $this->user_input;
    }

    /**
     * @return string
     */
    public function getMSISDN()
    {
        return $this->MSISDN;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }
}