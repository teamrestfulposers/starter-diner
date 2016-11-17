<?php

class Order extends CI_Model {

// constructor
    function __construct($state = null) {
        parent::__construct();
        if (is_array($state)) {
            foreach ($state as $key => $value)
                $this->$key = $value;
        } else {
            $this->number = 0;
            $this->datetime = null;
            $this->items = array();
        }
    }

    public function addItem($which = null) {
        // ignore empty requests
        if ($which == null)
            return;

        // add the menu item code to our order if not already there
        if (!isset($this->items[$which]))
            $this->items[$which] = 1;
        else {
            // increment the order quantity
            $this->items[$which] ++;
        }
    }

}
