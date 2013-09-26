<?php
/*
    Copyright © 2011 Adrien Zdanski
    http://www.bytemares.de
*/
require_once('classes/IPrintGraph.php');

class CGraphBarView implements IPrintGraph {
    private $_CGraphs;

    public function __construct($CGraphs /*array*/) {
        $this->_CGraphs = $CGraphs;
    }

    public function printGraph($nr) {
        $values = "";
        $labels = "";
        foreach($this->_CGraphs as $CGraph) {
            $values.=$CGraph->getValue().", ";
            $labels.=$CGraph->getLabel().", ";
        }
        $values = rtrim($values, ", ");
        $labels = rtrim($values, ", ");

        printf('<script type="text/javascript">
                    $(document).ready(function(){
                        iniCanvas(%s);
                        draw(%s, [%s], [%s]);
                    })
                </script>', $nr, $nr, $values, $labels);
    }
}
?>
