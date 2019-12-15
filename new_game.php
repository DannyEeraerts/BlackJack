<?php
/**
 * Created by Danny Eeraerts
 * Date: 2019-12-14
 * Time: 18:46
 */

require 'game.php';
$_POST = array();
session_destroy();
header("Location: index.php");