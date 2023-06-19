<?php

require 'Model/userModel.php';

class userController
{
    public $modal;
    public function __construct()
    {
        $this->modal = new userModel();
    }

    public function view()
    {
     require 'Views/homePage.php';
    }

    public function create()
    {
//        var_dump($_POST);
        //array(7) { ["action"]=> string(6) "create" ["product_name"]=> string(4) "Vivo" ["product_image"]=> string(6) "bg.png" ["product_sku"]=> string(8) "w2e3mn56" ["product_price"]=> string(2) "23" ["manufacturing_date"]=> string(10) "2023-06-02" ["available_stock"]=> string(2) "20" } array(0) { }
//        var_dump($_FILES);
        $this->modal->create($_POST);
//
//        var_dump($_POST);
//        var_dump($_FILES);
//        require 'Views/homePage.php';
    }
    public function read()
    {

        $this->modal->read();

//        require 'Views/listPage.php';
    }
    public function edit($id)
    {
        $this->modal->edit($_POST);

        $edit = $this->edit();

        return require 'Views/listPage.php';
    }
    public function update($id)
    {
        $this->modal->update($_POST);

        return require 'Views/editPage.php';
    }
    public function delete($id)
    {
        $this->modal->delete($_POST);

        return require 'Views/listPage.php';

    }
}