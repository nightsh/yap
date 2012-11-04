<?php
//var_dump($_POST);

require "Note.php";

if(isset($_REQUEST['id']))
    $note = new Note($_REQUEST['id']);
else
    $note = new Note();

require "header.php";
require "content.php";
