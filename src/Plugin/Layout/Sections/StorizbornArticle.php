<?php

namespace Drupal\storizborn_surcharger\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from storizborn_surcharger
 *
 * @Layout(
 *   id = "storizborn_surcharger_article_section",
 *   label = @Translation(" Storizborn : Article Section "),
 *   category = @Translation("storizborn_surcharger"),
 *   path = "layouts/sections",
 *   template = "storizborn_surcharger_article_section",
 *   library = "storizborn_surcharger/storizborn_surcharger_article_section",
 *   default_region = "article_date",
 *   regions = {
 *     "article_date" = {
 *       "label" = @Translation("article_date"),
 *     },
 *     "article_author" = {
 *       "label" = @Translation("article_author"),
 *     },
 *     "article_title" = {
 *       "label" = @Translation("article_title"),
 *     },
 *     "article_content" = {
 *       "label" = @Translation("article_content"),
 *     },
 *     "articles_links" = {
 *       "label" = @Translation("articles_links"),
 *     },
 *     "articles_blocks" = {
 *       "label" = @Translation("articles_blocks"),
 *     },
 *   }
 * )
 */

class StorizbornArticle extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'storizborn_surcharger') . "/icones/sections/storizborn_surcharger_article.png");
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
            'load_libray' => true,
            'region_tag_title' => 'h1',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    "article_date" => [
                        'text_html' => [
                            'label' =>"Date",
                            'value' => '<p>1 year ago </p>'
                        ]
                    ],
                    "article_author" => [
                        'text_html' => [
                            'label' =>"Auteur",
                            'value' => 'by Storizborn'
                        ]
                    ],
                    "article_title" => [
                        'text_html' => [
                            'label' =>"Titre",
                            'value' => 'Gamification'
                        ]
                    ],
                    "article_content" => [
                        'text_html' => [
                            'label' =>"Contenu de l'Article",
                            'value' => ''
                        ]
                    ],
                    "articles_links" => [
                        'url' => [
                            'label' => 'Liens',
                            'value' => [
                                'href' => '#',
                                'class' => 'st_article__more_link',
                                'text' => 'Sources',
                            ]
                        ]
                    ],
                    "articles_blocks" => [
                        'text_html' => [
                            'label' =>"Block",
                            'value' => '<div class="st_block">
                                            <div class="st_block__title">
                                                <h3>Search</h3>
                                            </div>
                                            <div class="st_block__items_find">
                                                <input class="st_block__items_find_search" name="" id="">
                                                <button class="st_block__items_find_btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50"><path fill="white" d="M23 36c-7.2 0-13-5.8-13-13s5.8-13 13-13s13 5.8 13 13s-5.8 13-13 13zm0-24c-6.1 0-11 4.9-11 11s4.9 11 11 11s11-4.9 11-11s-4.9-11-11-11z"/><path fill="white" d="m32.682 31.267l8.98 8.98l-1.414 1.414l-8.98-8.98z"/></svg>
                                                </button>
                                            </div>
                                        </div>'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}