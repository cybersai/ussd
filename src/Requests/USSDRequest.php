<?php


namespace Cybersai\USSD\Requests;


class USSDRequest
{
    protected $session_id;
    protected $user_input;
    protected $MSISDN;
    protected $network;
    protected $page = 1;
    protected $history = [];
    protected $payload;

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

    public function addHistory($object) {
        array_push($this->history, $object);
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }
}