<?php if ($page->hasFiles()): ?>
  <ul class="filelist">
    <?php foreach($page->files() as $file): ?>
      <?php if ($file->extension() != 'txt'): ?>
        <li>
          <a href="<?php echo $file->url() ?>"><?php echo $file->filename() ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
<?php endif ?>
