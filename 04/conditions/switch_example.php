<?php
//use the switch statement to check more than two conditions
//check the dashboard user select option
//dashboard, profile, settings, logout
$option = "profile";
switch($option){
    case "dashboard":
        echo "Welcome to the dashboard";
        break;
    case "profile":
        echo "Welcome to your profile";
        break;
    case "settings":
        echo "Welcome to settings";
        break;
    case "logout":
        echo "You are logged out";
        break;
    default:
        echo "Invalid option";
}
?>