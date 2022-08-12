<?php

namespace Drupal\luna_message\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the message entity edit forms.
 */
class LunaMessageModuleForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $result = parent::save($form, $form_state);

    $entity = $this->getEntity();

    $message_arguments = ['%label' => $entity->toLink()->toString()];
    $logger_arguments = [
      '%label' => $entity->label(),
      'link' => $entity->toLink($this->t('View'))->toString(),
    ];

    switch ($result) {
      case SAVED_NEW:
        $this->messenger()->addStatus($this->t('New message %label has been created.', $message_arguments));
        $this->logger('luna_message')->notice('Created new message %label', $logger_arguments);
        break;

      case SAVED_UPDATED:
        $this->messenger()->addStatus($this->t('The message %label has been updated.', $message_arguments));
        $this->logger('luna_message')->notice('Updated message %label.', $logger_arguments);
        break;
    }

    $form_state->setRedirect('entity.luna_message_module.canonical', ['luna_message_module' => $entity->id()]);

    return $result;
  }

}
