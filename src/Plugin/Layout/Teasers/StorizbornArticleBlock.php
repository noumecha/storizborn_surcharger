<?php

namespace Drupal\storizborn_surcharger\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from storizborn_surcharger module
 *
 * @Layout(
 *   id = "storizborn_surcharger_article_block",
 *   label = @Translation(" Storizborn Surcharger : Article Block  "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "storizborn_surcharger_article_block",
 *   library = "storizborn_surcharger/storizborn_surcharger_article_block",
 *   default_region = "block_title",
 *   regions = {
 *     "block_title" = {
 *       "label" = @Translation("block_title"),
 *     },
 *     "block_content" = {
 *       "label" = @Translation("block_content"),
 *      },
 *   }
 * )
 */
class StorizbornArticleBlock extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'storizborn_surcharger') . "/icones/teasers/storizborn_surcharger_article_block.png");
    }
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
    */
    public function build(array $regions) {
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        return $build;
    }
    /**
    * 
    * {@inheritdoc}
    * 
    */
    function defaultConfiguration() {
        return [
            'load_library' => true,
            "derivate" => [
                'value' => 'default',
                'options' => [
                    'mitor-hero--un' => 'un'
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'block_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'Tools'
                        ]
                    ],
                    'block_content' => [
                        'text_html' => [
                            'label' => 'Contenu',
                            'value' => ''
                        ]
                    ]  
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}