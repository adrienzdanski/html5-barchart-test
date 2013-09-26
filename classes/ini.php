<?php
/*
    Copyright © 2011 Adrien Zdanski
    http://www.bytemares.de
*/
require_once('classes/UtilXML.php');
require_once('classes/CGraph.php');
require_once('classes/CGraphBarView.php');

function ini() {
    $xml = new DOMDocument();
    $xml->load('xml/data.xml');

    $nrOfEntries = $xml->getElementsByTagName('graph')->length;

    $graphObjects = array();
    $dataCount = 0;

    for ($x = 0; $x < $nrOfEntries; $x++) {
        $graphs = UtilXML::loadSet($xml, 'graph', 'id', $x);
        $values = UtilXML::getXmlArray($graphs, 'data');
        $labels = UtilXML::getXmlArrayAttr($graphs, 'label');

        $dataCount = count($values);

        $graphObjects;
        for ($i = 0; $i < $dataCount; $i++) {
            $graphObjects[$i] = new CGraph($values[$i], $labels[$i]);
        }
        $graphView = new CGraphBarView($graphObjects);
        $graphView->printGraph($x);
    }
}

?>