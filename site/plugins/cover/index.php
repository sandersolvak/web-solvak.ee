<?php

use Kirby\Cms\File;

/**
 * Cover images for notes.
 *
 * New posts pick a cover with the "coverImage" files field. Older posts keep
 * the "cover" text field holding a kirbytag, e.g. "(image: my-photo.jpg class: cover)".
 * These methods prefer the picked image and fall back to the old field,
 * so existing content never needs converting.
 */
Kirby::plugin('my/cover', [
  'pageMethods' => [

    'hasCover' => function (): bool {
      return $this->coverImage()->toFile() !== null || $this->cover()->isNotEmpty();
    },

    // Renders the cover the same way the old "(image: …)" kirbytag did.
    // $class is only applied to picked images, old values keep their own attributes.
    'coverHtml' => function (string|null $class = null): string {
      if ($file = $this->coverImage()->toFile()) {
        $attr = $class ? ['class' => $class] : [];
        return kirbytag('image', $file->filename(), $attr, ['parent' => $this]);
      }

      return $this->cover()->isNotEmpty() ? (string)$this->cover()->kt() : '';
    },

    'coverFile' => function (): File|null {
      if ($file = $this->coverImage()->toFile()) {
        return $file;
      }

      if (preg_match('/\(image:\s*([^\s)]+)/i', $this->cover()->value() ?? '', $matches) === 1) {
        return $this->file(trim($matches[1]));
      }

      return null;
    },

  ]
]);
