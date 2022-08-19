<?php

namespace Drupal\products\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Represents a Product entity
 */
interface ProductInterface extends ContentEntityInterface, EntityChangedInterface {

  public function getName();

  public function setName($name);

  public function getProductNumber();

  public function setProductNumber($number);

  public function getRemoteId();

  public function setRemoteId($id);

  public function getSource();

  public function setSource($source);

  public function getCreatedTime();

  public function setCreatedTime($timestamp);
}
