<?php
require_once __DIR__ . "/../traits/HasId.php";

class Category {
  use HasId;

  protected $name;
  protected $icon = "fa-layer-group";

  function __construct($_name, $_icon = null) {
    $this->setName($_name);
    $this->setIcon($_icon);

    $this->setId("cat-");
  }

  /**
   * Get the value of name
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of icon
   */
  public function getIcon() {
    return $this->icon;
  }

  /**
   * Set the value of icon
   *
   * @return  self
   */
  public function setIcon($icon) {
    if (empty($icon)) {
      return;
    }

    $this->icon = $icon;

    return $this;
  }

  public function getIconHTML() {
    return "<i class='fas $this->icon' />";
  }
}