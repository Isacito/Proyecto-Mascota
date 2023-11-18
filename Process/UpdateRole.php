<?php
require_once(__DIR__ ."/../controller/roles.controller.php");
$role = new RolesController();
$role -> update(2,"cliente");