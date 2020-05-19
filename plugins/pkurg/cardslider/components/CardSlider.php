<?php namespace Pkurg\CardSlider\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Cms\Classes\Theme;
use RainLab\Blog\Models\Category as CategoryModel;
use RainLab\Blog\Models\Post as PostModel;

class CardSlider extends ComponentBase
{
    public $postPageUrl;
    public $postCount;
    public function componentDetails()
    {
        return [
            'name' => 'Card Slider Component',
            'description' => 'Bootstrap 4 Card Slider ',
        ];
    }
    public function defineProperties()
    {
        return [
            'cardonslider' => [
                'title' => 'Cards On Slider',
                'type' => 'dropdown',
                'default' => '4',
                'options' => ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '6' => '6'],
            ],
            'maxCardItems' => [
                'title' => 'Max Cards',
                'description' => 'The most amount of todo items allowed',
                'default' => 12,
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items property can contain only numeric symbols',
            ],
            'interval' => [
                'title' => 'Slide interval',
                'type' => 'string',
                'default' => 'false',
            ],
            'showdate' => [
                'title' => 'Show publication date?',
                'type' => 'checkbox',
                'default' => 'frue',
            ],
            'dateformat' => [
                'title' => 'Date format',
                'type' => 'string',
                'default' => 'm/d/Y',
            ],
            'postPage' => [
                'title' => 'Post page',
                'type' => 'dropdown',
                'default' => 'blog/post',
            ],
            'postPageSlug' => [
                'title' => 'Post page slug',
                'default' => ':slug',
            ],
            'exceptcategory' => [
                'title' => 'Show all category except',
                'type' => 'checkbox',
                'default' => 0,
            ],
            'categoryslug' => [
                'title' => 'Post category for cards',
                'type' => 'string',
                'placeholder' => 'Enter category slug',
            ],
            'sortorder' => [
                'title' => 'Published_at order',
                'type' => 'dropdown',
                'default' => 'desc',
                'options' => ['asc' => 'asc', 'desc' => 'desc', 'random' => 'random'],
            ],
            'addCss' => [
                'title' => 'Add component css',
                'type' => 'checkbox',
                'default' => 'frue',
            ],

            'image_width' => [
                'group' => 'Image',
                'title' => 'Image width',
                'default' => 250,
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items property can contain only numeric symbols',
            ],
            'image_height' => [
                'group' => 'Image',
                'title' => 'Image height',
                'default' => 150,
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items property can contain only numeric symbols',
            ],
            'mode' => [
                'group' => 'Image',
                'title' => 'Resize image mode',
                'type' => 'dropdown',
                'default' => 'crop',
                'options' => ['auto' => 'auto', 'exact' => 'exact', 'portrait' => 'portrait', 'landscape' => 'landscape', 'crop' => 'crop', 'fit' => 'fit'],
            ],
        ];
    }
    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
    public function getSliderCount()
    {
        return ceil($this->getTrueMaxItem() / $this->property('cardonslider'));
    }
    public function getURLPost($slug)
    {
        return str_replace($this->property('postPageSlug'), $slug, $this->postPageUrl);
    }
    public function getCompName()
    {
        return $this->alias;
    }
    public function getTrueMaxItem()
    {
        if ($this->property('maxCardItems') > $this->postCount) {
            return $this->postCount;
        } else {
            return $this->property('maxCardItems');
        }
    }
    public function onRun()
    {
        if ($this->property('addCss')) {
            $this->addCss('/plugins/pkurg/cardslider/assets/css/cardslider.css');
        }
    }
    public function getPosts()
    {
        $a = array_map('trim', explode(',', $this->property('categoryslug')));
        if ($this->property('exceptcategory') == '1') {
            $categories = CategoryModel::whereNotIn('slug', $a)->pluck('id');
        }
        if ($this->property('exceptcategory') == '0') {
            $categories = CategoryModel::whereIn('slug', $a)->pluck('id');
        }
        if ($categories !== null) {
            if ($this->property('sortorder') == "random") {
                $posts = PostModel::whereHas('categories', function ($q) use ($categories) {
                    $q->whereIn('id', $categories);
                })->where('published', '1')
                    ->limit($this->property('maxCardItems'))
                    ->inRandomOrder()
                    ->get();
            } else {
                $posts = PostModel::whereHas('categories', function ($q) use ($categories) {
                    $q->whereIn('id', $categories);
                })->where('published', '1')
                    ->limit($this->property('maxCardItems'))
                    ->orderBy('published_at', $this->property('sortorder'))
                    ->get();
            }
        }
        $theme = Theme::getEditTheme();
        $pages = Page::listInTheme($theme, true);
        foreach ($pages as $page) {
            if ($page->baseFileName == $this->property('postPage')) {
                $this->postPageUrl = $page->url;
            }
        }
        $this->postCount = $posts->count();
        return $posts;
    }
}
