<?php

namespace Drupal\edibles_boxscheme\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DefaultForm.
 */
class DefaultForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'edibles_boxscheme.default',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'default_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('edibles_boxscheme.default');
    $form['drop_day'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Drop Day'),
      '#description' => $this->t('Day of the week that delivery will be made to Drop points'),
      '#maxlength' => 10,
      '#size' => 15,
      '#default_value' => $config->get('drop_day'),
    ];
    $form['lead_in_days'] = [
      '#type' => 'number',
      '#title' => $this->t('Lead-in Days'),
      '#description' => $this->t('Minimum days needed between placing of a new order and its first delivery'),
      '#default_value' => $config->get('lead_in_days'),
    ];
    $form['weeks_purchased'] = [
      '#type' => 'number',
      '#title' => $this->t('Weeks Purchased'),
      '#description' => $this->t('Number of weeks paid for by this payment'),
      '#default_value' => $config->get('weeks_purchased'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('edibles_boxscheme.default')
      ->set('drop_day', $form_state->getValue('drop_day'))
      ->set('lead_in_days', $form_state->getValue('lead_in_days'))
      ->set('weeks_purchased', $form_state->getValue('weeks_purchased'))
      ->save();
  }

}
