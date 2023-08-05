<?php
/*
 * *****************************************************************************
 * Contributions to this work were made on behalf of the GÉANT project, a 
 * project that has received funding from the European Union’s Framework 
 * Programme 7 under Grant Agreements No. 238875 (GN3) and No. 605243 (GN3plus),
 * Horizon 2020 research and innovation programme under Grant Agreements No. 
 * 691567 (GN4-1) and No. 731122 (GN4-2).
 * On behalf of the aforementioned projects, GEANT Association is the sole owner
 * of the copyright in all material which was developed by a member of the GÉANT
 * project. GÉANT Vereniging (Association) is registered with the Chamber of 
 * Commerce in Amsterdam with registration number 40535155 and operates in the 
 * UK as a branch of GÉANT Vereniging.
 * 
 * Registered office: Hoekenrode 3, 1102BR Amsterdam, The Netherlands. 
 * UK branch address: City House, 126-130 Hills Road, Cambridge CB2 1PQ, UK
 *
 * License: see the web/copyright.inc.php file in the file structure or
 *          <base_url>/copyright.php after deploying the software
 */

// we need to know if we are serving a RTL language so we can flip some heading
// items
header("Content-Type:text/css");
require_once dirname(dirname(dirname(__DIR__))) . "/config/_config.php";

$langInstance = new core\common\Language();
$start = $langInstance->rtl ? "right" : "left";
$end = $langInstance->rtl ? "left" : "right";
?>
li.eap1 {list-style-type: none;}
ol.eapmethods { list-style-position: inside; margin: 0; padding: 0px; padding-top: 20px; padding-bottom: 0px; width: 20em; }
ol.eapmethods li{
    background: #CCF;
    border-<?php echo $start;?>-style: inset;
    border-<?php echo $start;?>-width: 1px;
    border-<?php echo $start;?>-color: #8BBACB;
    border-top-style: inset;
    border-top-width: 1px;
    border-top-color: #8BBACB;
    border-<?php echo $end;?>-style: outset;
    border-<?php echo $end;?>-width: 2px;
    border-<?php echo $end;?>-color: #043D52;
    border-bottom-style: outset;
    border-bottom-width: 2px;
    border-bottom-color: #043D52;
    border-radius: 6px;
    box-shadow: 4px 4px 4px #888888;
    background-image:url('../../resources/images/icons/strzalka5.png');
    background-repeat:no-repeat;
    background-position:95% 50%;
    margin: 2px 0px 2px 0px;
    padding: 3px;
    padding-<?php echo $start;?>: 1em;
    padding-<?php echo $end;?>: 0px;
}

table.eaptable td {
    background:#F0F0F0;
}

table.eaptable th {
    background:#F0F0F0;
}

#eap_bottom_row td {
    border-top-color: #888;
    border-top-style: solid;
    border-top-width: 2px;
}

#eap_bottom_row th {
    border-top-color: #888;
    border-top-style: solid;
    border-top-width: 2px;
}

#supported_eap {
    background: green;
    padding: 5px;
}

#unsupported_eap {
    background: red;
    padding: 5px;
}
