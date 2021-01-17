<?php

class AlbumPage extends Page
{

    // Use images as pages
    public function children()
    {
        $images = [];

        foreach ($this->images() as $image) {

          $images[] = [
              'slug'     => $image->name(),
              'num'      => $image->sort()->isNotEmpty() ? $image->sort()->value() : null,
              'template' => 'image',
              'model'    => 'image',
          ];
        }

        return Pages::factory($images, $this);
    }

}
