<?php
defined('_JEXEC') or die;

function renderMenuItems($items, $parent_id, $active_id, $path, $level = 1) {
    $html = '';
    foreach ($items as $item) {
        if ($item->parent_id == $parent_id) {
            $class = 'item';
            if ($item->id == $active_id) {
                $class .= ' active';
            }
            if (in_array($item->id, $path)) {
                $class .= ' current';
            }
            if ($item->type == 'separator') {
                $class .= ' divider';
            }
            if ($item->deeper) {
                $class .= ' parent';
            }

            $hasChildren = count(array_filter($items, function($child) use ($item) {
                return $child->parent_id == $item->id;
            })) > 0;

            if ($hasChildren) {
                $html .= '<div class="ui simple dropdown ' . $class . '">';
                $html .= '<a class="item" href="' . $item->flink . '">' . $item->title . '</a><i class="dropdown icon"></i>';
                $html .= '<div class="menu">';
                $html .= renderMenuItems($items, $item->id, $active_id, $path, $level + 1);
                $html .= '</div></div>';
            } else {
                $html .= '<a class="' . $class . '" href="' . $item->flink . '">' . $item->title . '</a>';
            }
        }
    }
    return $html;
}

echo renderMenuItems($list, 1, $active_id, $path);
?>

