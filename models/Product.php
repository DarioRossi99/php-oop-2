<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../traits/HasId.php";

class Product {
  use HasId;

  protected $name;
  protected $price;
  protected $image;
  protected $isAvailable = true;
  protected $quantity = 0;
  protected $category;

  /**
   * Undocumented function
   * phpdoc
   *
   * @param string $_name
   * @param float $_price
   * @param Category $_category
   * @param bool $_isAvailable
   * @param int $_quantity
   * @param string $_image
   */
  function __construct($_name, $_price, Category $_category, $_isAvailable = null, $_quantity = null, $_image = null) {
    // Assegno i valori delle propietà della classe prendendoli dagli attributi del costruttore
    // Questo metodo non permette di effettuare dei controlli / validazione sui dati
    // $this->name = $_name;
    // $this->price = $_price;
    // $this->category = $_category;
    // $this->isAvailable = $_isAvailable;
    // $this->quantity = $_quantity;
    // $this->image = $_image;

    // In questo modo, ogni setter al suo interno farà i dovuti controlli / validazioni
    $this->setName($_name);
    $this->setPrice($_price);
    $this->setCategory($_category);
    $this->setIsAvailable($_isAvailable);
    $this->setQuantity($_quantity);
    $this->setImage($_image);

    $this->setId("prod-");
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
    // se non riceviamo un valore sensato, 
    // ci rifiutiamo di salvare il valore.
    if (empty($name)) {
      return;
    }

    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of price
   */
  public function getPrice() {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */
  public function setPrice($price) {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of image
   */
  public function getImage() {
    return $this->image;
  }

  /**
   * Set the value of image
   *
   * @return  self
   */
  public function setImage($image) {
    if (is_null($image)) {
      return;
    }

    $this->image = $image;

    return $this;
  }

  /**
   * Get the value of isAvailable
   */
  public function getIsAvailable() {
    return $this->isAvailable;
  }

  /**
   * Set the value of isAvailable
   *
   * @return  self
   */
  public function setIsAvailable($isAvailable) {
    if (is_null($isAvailable)) {
      return;
    }

    $this->isAvailable = $isAvailable;

    return $this;
  }

  /**
   * Get the value of quantity
   */
  public function getQuantity() {
    return $this->quantity;
  }

  /**
   * Set the value of quantity
   *
   * @return  self
   */
  public function setQuantity($quantity) {
    if (is_null($quantity)) {
      return;
    }

    $this->quantity = $quantity;

    return $this;
  }

  /**
   * Get the value of category
   */
  public function getCategory() {
    return $this->category;
  }

  /**
   * Set the value of category
   *
   * @return  self
   */
  public function setCategory($category) {
    $this->category = $category;

    return $this;
  }

  public function printCardHTML($prodotto) {
?>

    <div class="card">
      <div class="card-body">
        <h3><?php echo $prodotto->getName() ?></h3>
        <h4><?php echo $prodotto->getPrice() ?></h4>

        <!-- <?php if (method_exists($prodotto, "getCalories")) { ?>
                    <div>Calorie: <?php echo $prodotto->getCalories() ?></div>
                  <?php } ?> -->

        <?php if (method_exists($prodotto, "getCalories")) {
          echo "<div>Calorie: {$prodotto->getCalories()}</div>";
        } ?>

        <?php if (method_exists($prodotto, "getMaterials")) { ?>
          <div>Materiali: <?php echo implode("<br> ", $prodotto->getMaterials()) ?></div>
        <?php } ?>
      </div>
    </div>

<?php
  }
}