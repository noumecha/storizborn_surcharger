<?php
use Drupal\Core\Render\Element;
// surcharge des flux rss
function template_preprocess_storizborn_surcharger_aggregator(&$vars){
  $vars['items'] = $vars['element']['#items'];
  dump($vars['items']);
}