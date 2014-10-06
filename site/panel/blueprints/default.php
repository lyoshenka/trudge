<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large
  hide_gallery:
    label: Hide Gallery
    type: checkbox
  hide_filelist:
    label: Hide File List
    type: checkbox
