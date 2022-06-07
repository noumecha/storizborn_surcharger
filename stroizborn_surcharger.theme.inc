<?php
use Drupal\Core\Render\Element;

// preprocess function for blog teaser tag 
function template_preprocess_layoutfield_rss_menu_list(&$vars)
{
  $elements = Element::children($vars['element']);
  $items = [];
  foreach($elements as $delta)
  {
    $items[$delta] = $vars['element'][$delta];
  }
  $vars['items'] = $items;
} 