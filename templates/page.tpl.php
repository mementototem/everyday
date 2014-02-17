<?php
/**
 * @File
 * Display a single page.
 */
?>
<div id="page-wrapper"><div id="page">

  <header id="header" role="banner">
    <div class="container">
      <?php if ($site_name || $site_slogan || $logo): ?>
        <div id="logo-and-name"<?php if ($secondary_menu || $page['header']) { print ' class="have-menu"'; } ?>>
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home">
              <img id="site-logo" src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" />
            </a>
          <?php endif; ?>

          <?php if ($site_name || $site_slogan): ?>
            <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="sr-only"'; } ?>>
              <?php if ($site_name): ?>
                <div id="site-name"<?php if ($hide_site_name) { print ' class="sr-only"'; } ?>>
                  <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home">
                    <?php print $site_name; ?>
                  </a>
                </div>
              <?php endif; ?>
              
              <?php if ($site_slogan): ?>
                <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="sr-only"'; } ?>>
                  <span><?php print $site_slogan; ?></span>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
    
    <?php if ($main_menu): ?>
    <div class="navbar navbar-everyday"><div class="container container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php //TODO: hide navbar-brand on normal view ?>
        <!--a class="navbar-brand" href="<?php print $front_page; ?>" rel="home"><?php print $site_name; ?></a-->
      </div>
      <nav id="main-menu" class="navbar-collapse collapse" role="navigation">
        <?php //FIX: multi level menus don't show correctly ?>
        <?php print theme('links__system_main_menu', array(
          'links'      => $main_menu,
          'attributes' => array(
            'id'    => 'main-menu-links',
            'class' => array('links', 'nav', 'navbar-nav'),
          ),
          'heading'    => array(
            'text'  => t('Main menu'),
            'level' => 'h2',
            'class' => array('sr-only'),
          ),
        )); ?>
      </nav>
    </div></div>
    <?php endif; ?>

    <?php if ($secondary_menu || $page['header']): ?>
      <div id="header-menu-wrapper">
        <div id="header-menu" class="container">
          <nav id="secondary-menu" class="navigation navbar-left" role="navigation">
            <?php print theme('links__system_secondary_menu', array(
              'links'      => $secondary_menu,
              'attributes' => array(
                'id'    => 'secondary-menu-links',
                'class' => array('links'),
              ),
              'heading'  => array(
                'text'  => t('Secondary menu'),
                'level' => 'h2',
                'class' => array('sr-only'),
              ),
            )); ?>
          </nav>
          
          <?php if ($page['header']): ?>
            <div class="pull-right">
              <?php print render($page['header']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
    
  </header>
  
  <?php if ($messages): ?>
    <div id="messages" class="container">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['featured']): ?>
    <div id="featured" class="container">
      <?php print render($page['featured']); ?>
    </div>
  <?php endif; ?>
  
  <div id="main-wrapper" class="container">
  
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    
    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>
    
    <main id="content" role="main">
      <?php if ($page['highlighted']): ?>
        <div id="highlighted">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>
      
      <div id="main-content">
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        
        <?php if ($tabs): ?>
          <div class="tabs"><?php print render($stabs); ?></div>
        <?php endif; ?>
        
        <?php print render($page['help']); ?>
        
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        
        <?php print render($page['content']); ?>
        
        <?php print $feed_icons; ?>
      </div>
    </main>
    
    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </div>
  
  <?php if ($page['triptych_first'] ||
            $page['triptych_middle'] ||
            $page['triptych_last']): ?>
    <div id="triptych" class="container">
      <?php
        print render($page['triptych_first']);
        print render($page['triptych_middle']);
        print render($page['triptych_last']);
      ?>
    </div>
  <?php endif; ?>
  
  <footer id="footer-wrapper">
    <?php if ($page['footer_firstcolumn'] ||
              $page['footer_secondcolumn'] ||
              $page['footer_thirdcolumn'] ||
              $page['footer_fourthcolumn']): ?>
    <div id="footer-columns" class="container">
      <?php
        print render($page['footer_firstcolumn']);
        print render($page['footer_secondcolumn']);
        print render($page['footer_thirdcolumn']);
        print render($page['footer_fourthcolumn']);
      ?>
    </div>
    <?php endif; ?>
    
    <?php if ($page['footer']): ?>
    <div id="footer" class="container">
      <?php print render($page['footer']); ?>
    </div>
    <?php endif; ?>
    
    <div id="license" class="container">
      <div id="theme-license" class="pull-left">
        Theme by <a href="http://about.me/mementototem">mementototem</a>.
      </div>
      <div id="base-license" class="pull-right">
        Base on <a href="http://getbootstrap.com">Bootstrap</a>
        and thanks <a href="http://glyphicons.com">Glyphicons</a> for their glyph.
      </div>
    </div>
  </footer>

</div></div>