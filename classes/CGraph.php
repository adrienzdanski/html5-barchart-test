<?php
/*
    Copyright © 2011 Adrien Zdanski
    http://www.bytemares.de
*/
class CGraph {
    private $_value;
    private $_label;

    public function __construct($value /*double*/, $label /*string*/) {
        $this->_value = $value;
        $this->_label = $label;
    }

    public function getValue() {
        return $this->_value;
    }
    public function getLabel() {
        return $this->_label;
    }
    public function setValue($value) {
        $this->_value = $value;
    }
    public function setLabel($label) {
        $this->_label = $label;
    }
}
?>
