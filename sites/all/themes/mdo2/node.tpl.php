<?php
// $Id: page.tpl.php,v 1.0 2010/02/20 09:36:17 pirotek Exp 


?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">
  <div class="content">
  <?php print $picture; ?>

      <?php if ($submitted): ?>
        <div class="submitted">
          <?php print $date ?>
        </div>
      <?php endif; ?>
    <h1 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h1>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <div class="detail clearfix">

    <?php print $content; ?>
  </div>
  </div>
  
  <div class="extra-links">
    <div class="terms terms-inline"><?php print theme('links', $taxonomy, array('class' => 'links term-links')) ?></div>
    <?php print $links; ?>
  </div>

</div></div> <!-- /node-inner, /node -->