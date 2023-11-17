<?php
class Name {
  private $database;
  
  function __construct($database) {
    $this->database = $database;
  }
  
  function select() {
    $statement = $this->database->prepare("SELECT name_id, lastname, firstname, middlename, suffix 
    FROM name");
    $statement->execute();
    $record = $statement->fetchAll();
    return $record;
  }
  
  function insert($data) {
    $statement = $this->database->prepare("INSERT INTO name (lastname, firstname, middlename, suffix) 
    VALUES (:lastname, :firstname, :middlename, :suffix) ");
    $statement->bindParam(':lastname', $data['lastname']);
    $statement->bindParam(':firstname', $data['firstname']);
    $statement->bindParam(':middlename', $data['middlename']);
    $statement->bindParam(':suffix', $data['suffix']);
    $statement->execute();
  }
  
  function update($data) {
    $statement = $this->database->prepare("UPDATE name SET lastname = :lastname, 
    firstname = :firstname, middlename = :middlename, suffix = :suffix 
    WHERE name_id = :name_id");
    $statement->bindParam(':lastname', $data['lastname']);
    $statement->bindParam(':firstname', $data['firstname']);
    $statement->bindParam(':middlename', $data['middlename']);
    $statement->bindParam(':suffix', $data['suffix']);
    $statement->bindParam(':name_id', $data['nameId']);
    $statement->execute();
  }
  
  function delete($nameId) {
    $statement = $this->database->prepare("DELETE FROM name WHERE name_id = :name_id");
    $statement->bindParam(':name_id', $nameId);
    $statement->execute();
  }
}