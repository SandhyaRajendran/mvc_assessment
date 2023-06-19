<?php

require 'connection.php';

class userModel extends DB
{
    public function create($data)
    {
//        $date = $data['product_name'];
//        var_dump($date);
//        string(5) "Vivoi" NULL

//        $fiie = $file['name'];
//        var_dump($fiie);

        $product_name = $data['product_name'];
//
//        $product_image = $file['product_image']['name'];
//        $move_image_to_folder = "images/".$product_image;
//        move_uploaded_file($file['product_image']['tmp_name'],$move_image_to_folder);
//        $moved_image = $move_image_to_folder;
        $sku = $data['product_sku'];
        $product_price = $data['product_price'];
//        //working
        $product_brand = $data['brands'];
        $manufacturing_date = $data['manufacturing_date'];
        $available_stock = $data['available_stock'];
////
        echo($product_price)."\n";
        echo($product_name)."\n";
        echo($sku)."\n";
        echo($manufacturing_date)."\n";
        echo($available_stock)."\n";
//        echo ($product_brand)."\n";
        $insert_product_data = $this->db->prepare("INSERT INTO product_details(product_name,SKU,price,manufacturing_date,available_stock)VALUES('$product_name','$sku','p$product_price','$manufacturing_date','$available_stock')");
        $insert_product_data->execute();

        header('location:/list');
    }
    public function read()
    {
        $product = $this->db->prepare("SELECT * FROM product_details");
        $product->execute();
        $allProduct = $product->fetchAll(PDO::FETCH_OBJ);
        $allProduct->execute();
        return $allProduct;
    }
    public function edit($id)
    {
        $editProduct = $this->db->prepare("SELECT * FROM product_details WHERE id=$id");
        $editProduct->execute();

        return $editProduct;
    }
    public function delete($id)
    {
        $deleteProduct = $this->db->prepare("DELETE FROM product_details WHERE id=$id");
        $deleteProduct->execute();

        header('location:/');
    }
    public function update($data)
    {
        $product_name = $data['product_name'];
        $sku = $data['product_sku'];
        $product_price = $data['product_price'];
        $manufacturing_date = $data['manufacturing_date'];
        $available_stock = $data['available_stock'];

        $updateProduct = $this->db->prepare( "UPDATE product_details SET WHERE product_name='$product_name',SKU='$sku',price='$product_price',manufacturing_date='$manufacturing_date',available_stock='$available_stock'");
        $updateProduct->execute();

        header('location:/');
    }
}