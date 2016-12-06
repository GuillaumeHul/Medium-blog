<?php

function location($module, $action, $get="")
{
    $url = 'Location:?module='. $module .'&action='. $action;
    if ($get !='')
        $url .= '&'.$get;
    header($url);
    exit;
}

function protection($session, $module, $action, $level){
    if(!isset($_SESSION[$session])){
        location($module, $action, "&notif=protection");
    }
        if (!isset ($_SESSION["level"])){
            location($module, $action, "&notif=protection");
        }
            if($_SESSION["level"] < $level){
                location($module, $action, "&notif=admin");
        }
    }
