<?php
require_once __DIR__ . "/../traits/HasId.php";

class User {
  use HasId;

  protected $firstName;
  protected $lastName;
  protected $email;
  public $age;

  function __construct($_firstName, $_lastName, $_email) {
    $this->setFirstName($_firstName);
    $this->setLastName($_lastName);
    $this->setEmail($_email);

    $this->setId();
  }

  public function getFullName() {
    // return $this->firstName . " " . $this->lastName;
    return $this->getFirstName() . " " . $this->getLastName();
  }

  /**
   * Sovrascrivo la funzione getId presente nel trait HasId.
   *
   * @return void
   */
  public function getId() {
    return strtoupper($this->id);
  }

  /**
   * Get the value of firstName
   */
  public function getFirstName() {
    return $this->firstName;
  }

  /**
   * Set the value of firstName
   *
   * @return  self
   */
  public function setFirstName($firstName) {
    if (empty($firstName)) {
      // lancio un errore per informare del problema avvenuto;
      throw new Exception("Il nome inserito non è valido.");
    }

    $this->firstName = $firstName;

    return $this;
  }

  /**
   * Get the value of lastName
   */
  public function getLastName() {
    return $this->lastName;
  }

  /**
   * Set the value of lastName
   *
   * @return  self
   */
  public function setLastName($lastName) {
    if (empty($lastName)) {
      // lancio un errore per informare del problema avvenuto;
      throw new Exception("Il cognome inserito non è valido.");
    }

    $this->lastName = $lastName;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email) {
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // lancio un errore per informare del problema avvenuto;
      throw new Exception("L'email inserito non è valida.");
    }

    $this->email = $email;

    return $this;
  }
}