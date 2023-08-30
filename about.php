<?php

$title = 'My Blog :: About';

$post = '
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorem ducimus molestiae necessitatibus, porro quae quidem repellat sed! Aliquid debitis fugiat obcaecati optio, quas quasi qui repellat sapiente vero voluptate!</p>
    p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis dignissimos eius, eos exercitationem facere facilis impedit in labore minus molestias nemo, omnis optio quod quos rem tenetur velit, voluptas.q</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam debitis dignissimos, dolorem impedit laudantium magni maiores, minima modi molestias neque nostrum odit quam quidem repudiandae sed similique tempora ullam!</p>
               ';

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item'))
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item'))
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item'))
    ]
    ,
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item'))
    ],
    5 => [
        'title' => 'A fifth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fifth item'))
    ],
];

require_once 'app/views/about.tpl.php';