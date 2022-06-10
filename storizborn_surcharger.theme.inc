<?php
use Drupal\Core\Render\Element;
// surcharge des flux rss
function template_preprocess_storizborn_surcharger_aggregator(&$vars){
  $vars['items'] = $vars['element']['#items'];
  //dump($vars['items']);
}
// srucharge de la book pagination 
function template_preprocess_storizborn_surcharger_book_navigation()
{
  //dump($vars);
}