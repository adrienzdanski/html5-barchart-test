<?php
/*
    Copyright © 2011 Adrien Zdanski
    http://www.bytemares.de
*/
class UtilXML {
    
    public static function loadSet($xml, $tag, $attr, $attrValue) {
        $allData = $xml->getElementsByTagName($tag);

        $parantNode;

        foreach($allData as $data) {
            if($data->getAttribute($attr) == $attrValue) {
                $parentNode = $data;
            }
        }

        return $parentNode->getElementsByTagName('data');
    }

    public static function getXmlArray($xml, $nodeName) {
        for ($i = 0; $i < $xml->length; $i++) {
            $tempArr[] = $xml->item($i)->nodeValue;
        }
        return $tempArr;
    }

    public static function getXmlArrayAttr($xml, $attrName) {
        for ($i = 0; $i < $xml->length; $i++) {
            $tempArr[] = $xml->item($i)->getAttribute($attrName);
        }
        return $tempArr;
    }
}

?>
