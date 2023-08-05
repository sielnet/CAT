<?php
/*
 * Contributions to this work were made on behalf of the GÉANT project, a 
 * project that has received funding from the European Union’s Horizon 2020 
 * research and innovation programme under Grant Agreement No. 731122 (GN4-2).
 * 
 * On behalf of the GÉANT project, GEANT Association is the sole owner of the 
 * copyright in all material which was developed by a member of the GÉANT 
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
@CHARSET "UTF-8";

.sb-titled-cell{
    font-weight:bold;
}
.sb-user-row{
    background:#F0F0F0;
}
.sb-user-buttons{
    margin-top: 2px;
    min-width:120px;
}
.sb-user-buttons button{
    margin-bottom:6px;
}
.sb-certificate-row{
    background:#DBEAF3;
}
.sb-certificate-summary{
    width:270px;
    display:inline-table;
    overflow: hidden;
    margin:3px;
}
.sb-certificate-details{
    width:260px;
    word-wrap: break-word;
}
.sb-title-row{
    background:lightgrey;
}
.sb-add-new-user{
    padding: 10px 10px 10px 10px;
    display: table;
}
.sb-editable-block{
    position: relative;
}
.sb-editable-block td{
    vertical-align: top;
}
.sb-editable-block fieldset{
    display: inline-block;
    margin: 5px;
    padding: 5px;
    min-width: 500px;
    min-height: 150px;
    vertical-align: top;
}
.sb-date-container{
    display: inline-block;
    width: 187px;
    margin-top:2px;
    margin-bottom:3px;
}
.sb-date-picker{
    padding-<?php echo $end;?>:25px;
    width: 140px;
}
.sb-date-button{
    margin-<?php echo $start;?>:-30px;
    min-height: 22px;
    border-<?php echo $start;?>-style: solid;
    border-top-style: solid;
    border-<?php echo $end;?>-style: solid;
    border-<?php echo $end;?>-width: 1px;
    border-bottom-width: 1px;
    border-radius: 1px;
    box-shadow: 0px 0px 0px #666666;
}
.sb-message-box{
    font-weight: bold;
}
.sb-message-box-error{
    color: red;
}
.sb-message-box-info{
    color: green;
}

