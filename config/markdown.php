<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Markdown.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Enable View Integration
    |--------------------------------------------------------------------------
    |
    | This option specifies if the view integration is enabled so you can write
    | markdown views and have them rendered as html. The following extensions
    | are currently supported: ".md", ".md.php", and ".md.blade.php". You may
    | disable this integration if it is conflicting with another package.
    |
    | Default: true
    |
    | 渲染 markdown 视图，支持 .md, .md.php, .md.blade.php, 支持 Blade @markdown 指令

    */

    'views' => true,

    /*
    |--------------------------------------------------------------------------
    | CommonMark Extensions
    |--------------------------------------------------------------------------
    |
    | This option specifies what extensions will be automatically enabled.
    | Simply provide your extension class names here.
    |
    | Default: []
    |
    | 自动加载的扩展

    */

    'extensions' => [
		CachetHQ\Emoji\EmojiExtension::class
	],

    /*
    |--------------------------------------------------------------------------
    | Renderer Configuration
    |--------------------------------------------------------------------------
    |
    | This option specifies an array of options for rendering HTML.
    |
    | Default: [
    |              'block_separator' => "\n",
    |              'inner_separator' => "\n",
    |              'soft_break'      => "\n",
    |          ]
    |
    | 渲染 HTML 的配置

    */

    'renderer' => [
        'block_separator' => "\n",
        'inner_separator' => "\n",
        'soft_break'      => "\n",
    ],

    /*
    |--------------------------------------------------------------------------
    | Enable Em Tag Parsing
    |--------------------------------------------------------------------------
    |
    | This option specifies if `<em>` parsing is enabled.
    |
    | Default: true
    |
    | 解释 em 标签

    */

    'enable_em' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable Strong Tag Parsing
    |--------------------------------------------------------------------------
    |
    | This option specifies if `<strong>` parsing is enabled.
    |
    | Default: true
    |
    | 解释 strong 标签

    */

    'enable_strong' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable Asterisk Parsing
    |--------------------------------------------------------------------------
    |
    | This option specifies if `*` should be parsed for emphasis.
    |
    | Default: true
    |
    | 将 * 解释为 斜体

    */

    'use_asterisk' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable Underscore Parsing
    |--------------------------------------------------------------------------
    |
    | This option specifies if `_` should be parsed for emphasis.
    |
    | Default: true
    |
    | 将 _ 解释为 斜体
    */

    'use_underscore' => true,

    /*
    |--------------------------------------------------------------------------
    | HTML Input
    |--------------------------------------------------------------------------
    |
    | This option specifies how to handle untrusted HTML input.
    |
    | Default: 'strip'
    | escape 转义显示
    | strip 去除不被信任的 HTML 标签

    */

    'html_input' => 'allow',

    /*
    |--------------------------------------------------------------------------
    | Allow Unsafe Links
    |--------------------------------------------------------------------------
    |
    | This option specifies whether to allow risky image URLs and links.
    |
    | Default: true
    |
    | 允许图片 URL 以及链接，javascript:, vbscript:, file:, data: 协议的链接

    */

    'allow_unsafe_links' => false,

    /*
    |--------------------------------------------------------------------------
    | Maximum Nesting Level
    |--------------------------------------------------------------------------
    |
    | This option specifies the maximum permitted block nesting level.
    |
    | Default: INF
    |
    | 允许的最大缩进，默认 INF 表示不限制

    */

    'max_nesting_level' => 2,

];
