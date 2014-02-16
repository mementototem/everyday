<?php
/**
 * @File
 * Basic HTML structure of single page.
 */
?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>">

<head profile="<?php print $grddl_profile; ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php print $head; ?>
  
  <title><?php print $head_title; ?></title>
  
  <?php print $styles; ?>
  
  <?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>

</html>