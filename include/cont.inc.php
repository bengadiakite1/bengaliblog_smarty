<?php

$cont= mysqli_connect('localhost', 'root', 'lprsc');//Pour se connecter à la base
$db= mysqli_select_db($cont,'blog_db');//Pour l'ouverture de la base
session_start ();

