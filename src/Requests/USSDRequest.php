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

    public function resetPageNumber() {
        $this->page = 1;
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
     * @param string $user_input
     */
    public function addHistory($object, $user_input) {
        array_push($this->history, [$object, $user_input]);
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

    /**
     * @return TemplateView
     */
    public function getLastView() {
        return end($this->history)[0];
    }

    public function processBack() {
        if (count($this->history) > 1) {
            array_pop($this->history);
            $this->setUserInput($this->getLastInput());
        }
    }

    public function processBeginning() {
        if (count($this->history) > 1) {
            $this->history = array_slice($this->history, 0, 1);
            $this->setUserInput($this->getLastInput());
        }
    }

    public function processNext() {
        $this->setUserInput($this->getLastInput());
        $this->incrementPageNumber();
    }

    public function processPrevious() {
        $this->setUserInput($this->getLastInput());
        $this->decrementPageNumber();
    }

    public function getLastInput() {
        return end($this->history)[1];
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