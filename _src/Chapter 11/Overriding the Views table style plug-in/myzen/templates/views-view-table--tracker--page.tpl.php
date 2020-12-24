<?php
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $class: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */

  // Calculate rowspans and store in an array.
  // This code should ideally be inside a preprocess
  // function.
  foreach ($rows as $row) {
    // Initialize tracking variables.
    if (!isset($groups)) {
      $groups = array();
      $current = $row['type'];
      $count = 0;
      $total = 0;
    }

    if ($row['type'] == $current) {
      $count++;
    }
    else {
      $current = $row['type'];
      $groups[$total] = $count;
      $total += $count;
      $count = 1;
    }
  }
  $groups[$total] = $count;

?>
<table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  <thead>
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" '; } ?>>
          <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $count => $row): ?>
      <tr class="<?php print implode(' ', $row_classes[$count]); ?>">
        <?php foreach ($row as $field => $content):
          // Only group the type column.
          if ($field == 'type'):
            // Add rowspan attribute only if the current
            // row is the first of a series. If not, do not
            // display any content.
            if (isset($groups[$count])): ?>
              <td class="views-field views-field-<?php print $fields[$field]; ?>" rowspan="<?php print $groups[$count]; ?>">
                <?php print $content; ?>
              </td>
            <?php endif; ?>
          <?php else: ?>
            <td class="views-field views-field-<?php print $fields[$field]; ?>">
              <?php print $content; ?>
            </td>
          <?php endif; ?>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
