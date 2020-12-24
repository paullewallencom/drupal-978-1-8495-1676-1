<?php

/**
 * @file theme.inc
 *
 * An array of preprocessors to fill variables for templates and helper
 * functions to make theming easier.
 */

/**
 * Make variables available to the definition list template.
 * file.
 */
function template_preprocess_views_view_dlist(&$vars) {
  template_preprocess_views_view_unformatted($vars);
  // Filter fields to only contain the term and definition.
  $vars['rows'] = $vars['view']->style_plugin->rendered_fields;
}
