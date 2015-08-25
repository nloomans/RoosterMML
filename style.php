<?php 
header("Content-type: text/css");
date_default_timezone_set('Europe/Amsterdam');
$today = date("w");
?>

body {
	font-family: 'Roboto', sans-serif;
}

.calendars {
	display: flex;
}

.calendar {
	margin: 0px auto;
}
.calendar > header {
	display: flex;
	background-color: #F44336;
	color: white;
	border-radius: 7px 7px 0px 0px;
	padding: 19.5px;
    font-size: 21px;
}

.calendar > header .notification {
	position: relative;
}

.calendar > header .notification i {
	cursor: pointer;
}

.calendar > header .notification .formContainer {
	position: relative;
	z-index: 1;
	display: none;
}

.calendar > header .notification form {
	background-color: white;
    position: absolute;
    right: -10px;
    top: 18px;
    padding: 16px;
}

.calendar > header .notification form:before {
	content: "";
    position: absolute;
    background-color: white;
    width: 20px;
    height: 20px;
    transform: rotate(45deg);
    top: -10px;
    right: 10px;
    z-index: -1; 
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.calendar > header .notification form:after {
	content: "";
	position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    z-index: -2;
}

.grow {
	flex-grow: 1;
}

.calendar .content {
	display: flex;
}

.calendar .day > header {
	font-weight: bold;
}

.calendar .day header, .hour {
	padding: 12px;
    box-sizing: border-box;
    font-size: 16px;
    border-bottom: 1px dashed #D8D8D8;
    text-align: center;
}

.calendar .day header {
	padding: 21px;
}

.hour.free:before {
	content: "\00a0";
}

.calendar header, .hour:last-child {
	border-bottom: none;
}

.calendar {
	/*max-width: 500px;*/
	border-radius: 7px 7px 0px 0px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

/*** Today ***/
.content > :nth-child(<?php echo $today; ?>) {
	zoom: 1.04;
    margin-top: -15px;
    width: 160px;
    margin-bottom: -15px;
    background-color: white;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}