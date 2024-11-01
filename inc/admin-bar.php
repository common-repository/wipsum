<?php

namespace CasualWP\Wipsum;

function add_admin_bar_menu(\WP_Admin_Bar $admin_bar) {
    $children = [
        [
            'type' => 'word',
            'count' => 4,
        ],
        [
            'type' => 'sentence',
            'count' => 4,
        ],
        [
            'type' => 'paragraph',
            'count' => 4,
        ],
    ];

    $admin_bar->add_menu([
        'id' => 'wipsum',
        'title' => '<span class="ab-icon"></span><span class="ab-label">Wipsum</span>',
    ]);

    foreach($children as $child) {
        $type = $child['type'];
        $count = $child['count'];

        $title_content = '';

        for($number = 1; $number < 5; $number++) {
            $title_content .= "<span class='wipsum-button' data-type='{$type}' data-number='{$number}'></span>";
        }

        $admin_bar->add_menu([
            'parent' => 'wipsum',
            'id' => "wipsum-{$type}-{$number}",
            'title' => "<span class='wipsum-button-container' data-type='{$type}' data-count='{$count}'>{$title_content}</span>",
        ]);
    }
}
