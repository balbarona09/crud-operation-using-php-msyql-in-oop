<?php
require_once 'database.php';
require_once 'Name.php';

$name = new Name($database);

if(!empty($_POST['insert'])) {
  $name->insert([
    'lastname' => $_POST['lastname'], 
    'firstname' => $_POST['firstname'], 
    'middlename' => $_POST['middlename'], 
    'suffix' => $_POST['suffix']
  ]);
}

if(!empty($_POST['update'])) {
  $name->update([
    'lastname' => $_POST['lastname'], 
    'firstname' => $_POST['firstname'], 
    'middlename' => $_POST['middlename'], 
    'suffix' => $_POST['suffix'], 
    'nameId' => $_POST['name-id']
  ]);
}

if(!empty($_POST['delete'])) {
  $name->delete($_POST['name-id']);
}

$record = $name->select();