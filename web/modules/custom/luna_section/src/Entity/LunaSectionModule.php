<?php

namespace Drupal\luna_section\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\luna_section\LunaSectionModuleInterface;

/**
 * Defines the section entity type.
 *
 * @ConfigEntityType(
 *   id = "luna_section_module",
 *   label = @Translation("Section"),
 *   label_collection = @Translation("Sections"),
 *   label_singular = @Translation("section"),
 *   label_plural = @Translation("sections"),
 *   label_count = @PluralTranslation(
 *     singular = "@count section",
 *     plural = "@count sections",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\luna_section\LunaSectionModuleListBuilder",
 *     "form" = {
 *       "add" = "Drupal\luna_section\Form\LunaSectionModuleForm",
 *       "edit" = "Drupal\luna_section\Form\LunaSectionModuleForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 *     }
 *   },
 *   config_prefix = "luna_section_module",
 *   admin_permission = "administer luna_section_module",
 *   links = {
 *     "collection" = "/admin/structure/luna-section-module",
 *     "add-form" = "/admin/structure/luna-section-module/add",
 *     "edit-form" = "/admin/structure/luna-section-module/{luna_section_module}",
 *     "delete-form" = "/admin/structure/luna-section-module/{luna_section_module}/delete"
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "urlPattern",
 *     "color"
 *   }
 * )
 */
class LunaSectionModule extends ConfigEntityBase implements LunaSectionModuleInterface {

  /**
   * The section ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The section label.
   *
   * @var string
   */
  protected $label;

  /**
   * The section status.
   *
   * @var bool
   */
  protected $status;

  /**
   * The luna_section_module description.
   *
   * @var string
   */
  protected $description;

  protected $urlPattern;

  protected $color;

  public function getUrlPattern() {
    return $this->urlPattern;
  }

  public function getColor() {
    return $this->color;
  }

  public function setUrlPattern($pattern) {
    $this->urlPattern = $pattern;
    return $this;
  }

  public function setColor($color) {
    $this->color = $color;
    return $this;
  }

}
