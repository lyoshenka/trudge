<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <h1><?php echo html($page->title()) ?></h1>

  <ul class="gallery">
    <?php foreach($page->files() as $file): ?>
      <?php if ($file->extension() != 'txt'): ?>
        <li>
          <a href="<?php echo $file->url() ?>"><?php echo $file->filename() ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>

</section>

<?php snippet('footer') ?>
