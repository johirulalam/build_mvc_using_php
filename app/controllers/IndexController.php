<?php

class IndexController extends Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function page() {
        $this->viewPage->view("home");
    }

    public function category() {
        $data = [];
        $categoryModel = $this->viewPage->Model("CategoryModel");
        $data['categories'] = $categoryModel->categoryList();
        $this->viewPage->view('category', $data);
    }
}

?>