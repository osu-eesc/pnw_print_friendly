<?php // $Id: page.tpl.php,v 1.1.2.5 2010/01/11 00:09:05 sociotech Exp $ ?>
  <div id="limiter"> <!-- adds shadow around page -->
    <form id="send-to-printer">
      <input type="button" value="Print" onClick="window.print()" />
      <input type="button" value="Back" onClick="history.go(-1)" />
    </form>

    <div id="header">
      <div id="url-path">
        <?php print '<strong>Printed page URL:</strong> ' . $_SERVER['HTTP_HOST'] . base_path() . 'node/' . $node->nid; ?>
        <hr />
      </div> <!-- /url-path -->
    </div> <!-- /header -->

    <div id="content-region" class="content-region row nested">
      <div id="content-region-inner" class="content-region-inner inner">
        <div id="content-inner" class="content-inner block">
          <div id="content-inner-inner" class="content-inner-inner inner">

            <?php if ($title): ?>
              <h2 class="title"><?php print $title; ?></h2>
            <?php endif; ?>

            <?php if ($page['content']): ?>
              <div id="content-content" class="content-content">
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>

<?php
    /**
     * The given node is /embedded to its absolute depth in a top level
     * section/. For example, a child node with depth 2 in the hierarchy is
     * contained in (otherwise empty) &lt;div&gt; elements corresponding to
     * depth 0 and depth 1. This is intended to support WYSIWYG output - e.g.,
     * level 3 sections always look like level 3 sections, no matter their
     * depth relative to the node selected to be exported as printer-friendly
     * HTML.
     */
    // $div_close = '';
    ?>
    <?php //for ($i = 1; $i < $depth; $i++) : ?>
      <!-- <div class="section-<?php //print $i; ?>"> -->
      <?php //$div_close .= '</div>'; ?>
    <?php //endfor; ?>

    <?php //print $contents; ?>
    <?php //print $div_close; ?>


              </div><!-- /content-content -->
            <?php endif; ?>

          </div><!-- /content-inner-inner -->
        </div><!-- /content-inner -->
      </div><!-- /content-region-inner -->
    </div><!-- /content-region -->

  </div> <!-- /limiter -->

<?php //print $closure; ?>
