<?php
// stop without videos
if(empty($videos)) return;
// set some defaults
if(!isset($controls)) $controls = false;
// build the html atts for the video element
$controls = ($controls) ? ' controls="controls"' : '';
$poster_attr = ($poster) ? ' poster="'. $poster->url() .'"' : '';
?>

<video preload="auto" autoplay playsinline loop muted poster="<?= $poster->url() ?>">
<?php foreach($videos as $video): ?>
<?php if($video):?>
  <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>" />
<?php endif ?>
<?php endforeach ?>
</video>
