<?php
use Drupal\Core\Render\Element;

// surcharge des flux rss
function template_preprocess_block__aggregator(&$vars){
  $vars['items'] = $vars['elements']['content']['list']['#items'];
}