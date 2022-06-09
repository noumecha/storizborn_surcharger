<?php
use Drupal\Core\Render\Element;

// surcharge des flux rss
function template_preprocess_storizborn_surcharger_rss_theme(&$vars){
  $vars['items'] = $vars['elements']['content']['list']['#items'];
}