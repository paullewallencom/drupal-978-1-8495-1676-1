<?php

/**
 * @file views-view-dlist.tpl.php
 * Default simple view template to display rows as a definition list.
 *
 * - $title: The title of this group of rows.  May be empty.
 * - $options['term']: The field holding the definition term.
 * - $options['definition']: The field holding the definition content.
 * - $rows: Rendered fields available as an associative array based on $options.
 * @ingroup views_templates
 */
?>
<div class="definition-list">
  <?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <dl>
    <?php foreach ($rows as $id => $row): ?>
      <dt class="views-field views-field-term-<?php print $id; ?>">
        <?php print $row[$options['term']]; ?>
      </dt>
      <dd class="views-field views-field-definition-<?php print $id; ?>">
        <?php print $row[$options['definition']]; ?>
      </dd>
    <?php endforeach; ?>
  </dl>
</div>

