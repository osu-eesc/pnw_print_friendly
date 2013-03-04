<?php // $Id: page.tpl.php,v 1.1.2.5 2010/01/11 00:09:05 sociotech Exp $ ?>
  <div id="limiter"> <!-- adds shadow around page -->

    <div class="print-heading">PNW Insect Management Handbook</div>
    
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
            
            <?php if ($page['content']): ?>

              <div id="content-content" class="content-content">
                <?php print render($page['content']); ?>
                
                <?php
                  $block = module_invoke('views', 'block_view', 'ae7496d40d3739342fa2c6df343877c4');
                  if ($block) {
                    print '<h3>Related Links</h3>';
                    print render($block);
                  }
                ?>

                <?php print $feed_icons; ?>

                <hr class="bottom-bar" />
                <div class="footer">
                <p>
                  Hollingsworth, C.S. (Ed.). <?php print date('Y'); ?>. Pacific Northwest Insect Management Handbook. <br />
                 &copy; Oregon State University.
                </p>
                <h3>Use pesticides safely!</h3>
                <ul>
                  <li>Wear protective clothing and safety devices as recommended on the label. Bathe or shower after each use.</li>
                  <li>Read the pesticide label—even if you’ve used the pesticide before. Follow closely the instructions on the label (and any other directions you have).</li>
                  <li>Be cautious when you apply pesticides. Know your legal responsibility as a pesticide applicator. You may be liable for injury or damage resulting from pesticide use.</li>
                </ul>
                <p>Trade-name products and services are mentioned as illustrations only. This does not mean that the participating Extension Services endorse these products and services or that they intend to discriminate against products and services not mentioned.</p>
             
              </div><!-- /content-content -->

            <?php endif; ?>

          </div><!-- /content-inner-inner -->
        </div><!-- /content-inner -->
      </div><!-- /content-region-inner -->
    </div><!-- /content-region -->

  </div> <!-- /limiter -->

<?php //print $closure; ?>
