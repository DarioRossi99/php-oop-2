<?php

trait HasId {
  private $id;
  private $name;


  /**
   * Get the value of id
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  private function setId($prefix = "") {
    $this->id = uniqid($prefix);

    return $this;
  }
}