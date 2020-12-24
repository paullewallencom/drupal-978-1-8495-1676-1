<?php
/**
 * @file
 * Contains the definition list style plugin.
 */

/**
 * Style plugin to render each item in a definition list.
 *
 * @ingroup views_style_plugins
 */
class views_plugin_style_dlist extends views_plugin_style {
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    // Create an array of allowed columns from the data we know:
    $field_names = $this->display->handler->get_field_labels();

    $form['term'] = array(
      '#type' => 'select',
      '#title' => t('Term field for the definition list &lt;DT&gt;'),
      '#options' => $field_names,
      '#default_value' => $this->options['term']
    );
    $form['definition'] = array(
      '#type' => 'select',
      '#title' => t('Definition field for the definition list &lt;DD&gt;'),
      '#options' => $field_names,
      '#default_value' => $this->options['definition']
    );
  }
}
