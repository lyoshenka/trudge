<?php if ($page->hasImages()): ?>
  <ul class="gallery unstyled">
    <?php foreach($page->images() as $image): ?>
      <li>
        <a href="<?php echo $image->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>"></a>
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>
