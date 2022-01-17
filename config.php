<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000',
    'title' => 'Subworthy Blog',
    'rssTitle' => 'Subworthy Blog',
    'description' => "All the latest news, features and updates about Subworthy.",
    'siteLanguage' => 'en',
    'collections' => [
        'blog' => [
            'author' => 'Phil Stephens', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'post/{-filename}',
            'filter' => function ($item) {
                return $item->date;
            },
        ],
    ],
    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
];
