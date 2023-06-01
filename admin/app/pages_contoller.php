<?php
require_once('vander.php');
require_once('functions.php');

class Page
{
    protected $page;

    function __construct($page)
    {
        $this->page = $page;
        $this->page();
    }

    public function page()
    {
        if ($this->page == 'index.php') {
            $page = new Crud('hcip',"WHERE page = 'index'" ); $index = $page->get();
            $page = new Crud('hcip',"WHERE page = 'index_slide'" ); $index_slide = $page->get();
            $page = new Crud('hcip',"WHERE id = 4" ); $homeFeature1 = $page->get();
            $page = new Crud('hcip',"WHERE id = 5" ); $homeFeature2 = $page->get();
            $page = new Crud('hcip',"WHERE id = 6" ); $homeFeature3 = $page->get();
            $page = new Crud('hcip',"WHERE id = 7" ); $contactBox1 = $page->get();
            $page = new Crud('hcip',"WHERE id = 8" ); $contactBox2 = $page->get();
            $page = new Crud('hcip',"WHERE page = 'index_devices'"); $index_devices = $page->get();
        }elseif($this->page == 'blogs.php'){
            $page = new Crud('blogs'); $blogs = $page->get();
        }elseif($this->page == 'category.php'){
            $page = new Crud('category'); $category = $page->get();
        }elseif($this->page == 'brands.php'){
            $page = new Crud('category'); $category = $page->get();
            $page = new Crud('brands'); $brands = $page->get();
            $page = new Crud('hcip',"WHERE page = 'brand_bottom'" ); $brand_bottom = $page->get();
        }elseif($this->page == 'models.php'){
            // $page = new Crud('category'); $category = $page->get();
            $page = new Crud('brands'); $brands = $page->get();
            $page = new Crud('models',"INNER JOIN brands ON models.brand_id = brands.id"); $models = $page->get('models.id, models.name, brands.name as brandname, models');
        }elseif($this->page == 'issue.php'){
            $page = new Crud('hcip',"WHERE page = 'model_bottom'" ); $model_bottom = $page->get();
            $page = new Crud('issues', "INNER JOIN models ON models.id = issues.series_id LEFT JOIN single_issue ON issues.id = single_issue.issue_id"); $issues = $page->get('issues.id, issues.name, issues.image, models.name as modelname, single_issue.id as single_issue_id');
            $page = new Crud('models'); $models = $page->get();
        }elseif($this->page == 'setting.php'){
            $page = new Crud('setting', 'WHERE id = 1');
            $setting = $page->get()[0];
        }
        include($this->page);
    }
}
