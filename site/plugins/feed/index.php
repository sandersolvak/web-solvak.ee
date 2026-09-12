<?php

use Kirby\Cms\Page;
use Kirby\Http\Response;
use Kirby\Toolkit\Str;
use Kirby\Toolkit\Xml;

Kirby::plugin('solvak/feed', [
    'routes' => [
        [
            'pattern' => 'feed',
            'method'  => 'GET',
            'action'  => function () {
                return feedResponse();
            },
        ],
    ],
]);

function feedResponse(): Response
{
    $site  = site();
    $notes = $site->find('notes');
    $items = $notes->children()->listed()->sortBy('date', 'desc')->limit(16);

    $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2000/atom">' . "\n";
    $xml .= '<channel>' . "\n";
    $xml .= '<title>' . Xml::encode('Noted by Sander') . '</title>' . "\n";
    $xml .= '<link>' . Xml::encode($site->url()) . '</link>' . "\n";
    $xml .= '<atom:link href="' . Xml::encode($site->url() . '/feed') . '" rel="self" type="application/rss+xml" />' . "\n";
    $xml .= '<description>' . Xml::encode('Interesting and/or cool stuff I have come across from art, design, technology, photography, movies I have watched and liked and, occasionally, my thoughts.') . '</description>' . "\n";
    $xml .= '<language>en</language>' . "\n";
    $xml .= '<lastBuildDate>' . date('r') . '</lastBuildDate>' . "\n";

    foreach ($items as $article) {
        $xml .= feedItem($article);
    }

    $xml .= '</channel>' . "\n";
    $xml .= '</rss>' . "\n";

    return new Response($xml, 'application/rss+xml', 200, [], 'UTF-8');
}

function feedItem(Page $article): string
{
    $title = $article->title()->value();
    $url   = $article->url();
    $date  = $article->date()->isNotEmpty()
        ? $article->date()->toTimestamp()
        : $article->modified();

    $coverFilename = feedCoverFilename($article);
    $coverFile     = $coverFilename ? $article->file($coverFilename) : null;

    $description = feedDescription($article, $coverFilename);

    $item  = '<item>' . "\n";
    $item .= '<title>' . Xml::encode($title) . '</title>' . "\n";
    $item .= '<link>' . Xml::encode($url) . '</link>' . "\n";
    $item .= '<guid isPermaLink="true">' . Xml::encode($url) . '</guid>' . "\n";
    $item .= '<pubDate>' . date('r', $date) . '</pubDate>' . "\n";
    $item .= '<description><![CDATA[' . str_replace(']]>', ']]&gt;', $description) . ']]></description>' . "\n";

    if ($coverFile && $coverFile->type() === 'image') {
        $item .= '<enclosure url="' . Xml::encode($coverFile->url()) . '" length="' . $coverFile->size() . '" type="' . $coverFile->mime() . '" />' . "\n";
    }

    $item .= '</item>' . "\n";

    return $item;
}

/**
 * The "cover" field is free text holding a kirbytag,
 * e.g. "(image: my-photo.jpg class: cover)" - extract the filename from it.
 */
function feedCoverFilename(Page $article): string|null
{
    $cover = $article->cover();

    if ($cover->isEmpty()) {
        return null;
    }

    if (preg_match('/\(image:\s*([^\s)]+)/i', $cover->value(), $matches) === 1) {
        return trim($matches[1]);
    }

    return null;
}

function feedDescription(Page $article, string|null $coverFilename): string
{
    $ledeValue = $article->lede()->isNotEmpty() ? $article->lede()->value() : '';
    $textValue = $article->text()->value();

    // Skip the separately rendered cover image if it's already referenced
    // inside the lede/text content, to avoid showing it twice.
    $coverAlreadyInContent = $coverFilename && Str::contains($ledeValue . $textValue, $coverFilename);

    $html = '';

    if ($coverFilename && !$coverAlreadyInContent) {
        $html .= $article->cover()->kt();
    }

    if ($ledeValue !== '') {
        $html .= $article->lede()->kt();
    }

    $html .= $article->text()->kt();

    return trim($html);
}
