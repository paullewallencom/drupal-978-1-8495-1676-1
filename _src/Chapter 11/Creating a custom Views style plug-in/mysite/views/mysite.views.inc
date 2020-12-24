<?php

/**
 * @file
 * Declares the definition list plug-in for the Views module.
 */

/**
 * Implements hook_views_style_plugins().
 */
function mysite_views_plugins() {
  return array(
    'style' => array(
      'dlist' => array(
        'title' => t('Definition list'),
        'type' => 'normal',
        'path' => drupal_get_path('module', 'mysite') . '/views',
        'handler' => 'views_plugin_style_dlist',
        'uses fields' => TRUE,
        'uses row plugin' => FALSE,
        'uses options' => TRUE,
        'uses grouping' => FALSE,
        'theme' => 'views_view_dlist',
        'theme path' => drupal_get_path('module', 'mysite') . '/views',
        'theme file' => 'dlist.views.theme.inc',
        'help' => t('Render a view as a definition list.')
      )
    )
  );
}

