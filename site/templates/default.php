<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
    <?php if ($page->gallery() == 'on'): ?>
      <?php snippet('gallery') ?>
    <?php endif ?>
    <?php if ($page->filelist() == 'on'): ?>
      <?php snippet('filelist') ?>
    <?php endif ?>
  </article>

</section>

<?php snippet('footer') ?>
