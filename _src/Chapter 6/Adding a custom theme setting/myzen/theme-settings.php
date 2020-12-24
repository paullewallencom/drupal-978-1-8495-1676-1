<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function myzen_form_system_theme_settings_alter(&$form, &$form_state)  {

  // Create the form using Forms API: http://api.drupal.org/api/7

  /* -- Delete this line if you want to use this setting
  $form['myzen_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('myzen sample setting'),
    '#default_value' => theme_get_setting('myzen_example'),
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */

  $form['myzen_disclaimer'] = array(
    '#type' => 'textfield',
    '#title' => t('Node disclaimer'),
    '#default_value' => theme_get_setting('myzen_disclaimer'),
    '#description' => t("Enter the disclaimer text to add at the bottom of node content.")
  );

  // Remove some of the base theme's settings.
  unset($form['themedev']['zen_layout']); // We don't need to select the layout stylesheet.

  // We are editing the $form in place, so we don't need to return anything.
}
