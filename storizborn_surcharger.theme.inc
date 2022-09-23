<?php
use Drupal\Core\Render\Element;
// surcharge des flux rss
function template_preprocess_storizborn_surcharger_aggregator(&$vars){
  $vars['items'] = $vars['element']['#items'];
  //dump($vars['items']);
}
// surcharge pour le menu tools : 
//function template_preprocess_storizborn_surcharger_menu(&$vars)
//{
//  dump($vars);
//}
// srucharge de la book pagination 
function template_preprocess_storizborn_surcharger_bn(&$vars)
{
  dump($vars);
}