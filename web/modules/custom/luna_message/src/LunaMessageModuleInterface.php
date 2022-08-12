<?php

namespace Drupal\luna_message;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a message entity type.
 */
interface LunaMessageModuleInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  public function getType();


}
