<?php
// $Id: page.tpl.php,v 1.0 2010/02/20 09:36:17 pirotek Exp 


?>

<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block block block-<?php print $block->module ?> <?php if (function_exists(block_class)) print block_class($block); ?>">
  <div class="block-inner">
  <?php if ($block->subject): ?>
    <h2 class="title"><?php print $block->subject; ?></h2>
  <?php endif; ?>

  <div class="content">
    <?php print $block->content; ?>
  </div>

  <?php print $edit_links; ?>

</div></div> <!-- /block-inner, /block -->
