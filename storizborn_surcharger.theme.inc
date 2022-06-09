<?php
use Drupal\Core\Render\Element;
// surcharge des flux rss
function template_preprocess_storizborn_surcharger_aggregator(&$vars){
  $vars['list'] = $vars['elements']['content']['list'];
  $vars['items'] = $vars['elements']['content']['list']['#items'];
}