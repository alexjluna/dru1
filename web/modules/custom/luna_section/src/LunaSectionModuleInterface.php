<?php

namespace Drupal\luna_section;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface defining a section entity type.
 */
interface LunaSectionModuleInterface extends ConfigEntityInterface {

  public function getUrlPattern();

  public function getColor();

  public function setUrlPattern($pattern);

  public function setColor($color);

}
