<?php
    class product_type {
        function product_type ($index, $name) {
            $this->index = $index;
            $this->product_type_name = $name;
        }
    }
    class product {
        function product ($product_id, $product_name, $product_type_id, $product_type_name, $image, $product_description, $quantity, $units, $price_per_unit) {
            $this->product_id = $product_id;
            $this->product_name = $product_name;
            $this->product_type_id = $product_type_id;
            $this->product_type_name = $product_type_name;
            $this->image = $image;
            $this->product_description = $product_description;
            $this->quantity = $quantity;
            $this->units = $units;
            $this->price_per_unit = $price_per_unit;
        }
    }
    function getParentCategory($connection) {
        $sql = "select * from types_of_products where parent = '0'";
        $result = mysqli_query($connection, $sql);
        $array = array();
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $obj = new product_type($row['product_type_id'], $row['product_type_name']);
                array_push($array, $obj);
            }
        }
        $json_data = json_encode($array);
        return $json_data;
    }
    function getSubtypes ($connection, $parent_id) {
        $sql = "select * from types_of_products where parent = '".$parent_id."'";
        $result = mysqli_query($connection, $sql);
        $array = array();
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $obj = new product_type($row['product_type_id'], $row['product_type_name']);
                array_push($array, $obj);
            }
        }
        $json_data = json_encode($array);
        return $json_data;
    }
    function getProducts ($connection, $subCategoryArray) {
        $sql = "";
        if(is_array($subCategoryArray)) {
            $ids = join("','",$subCategoryArray);
            $sql = "SELECT product.product_id, product.product_name, product.product_type_id, types_of_products.product_type_name, other_details.image, other_details.product_description, size_table.quantity, size_table.units, product_size_relation.price_per_unit, product_size_relation.real_product_id from product, other_details, types_of_products, product_size_relation, size_table where product.product_id = other_details.product_id and product.product_type_id = types_of_products.product_type_id and product.product_id = product_size_relation.product_id and size_table.size_id = product_size_relation.size_id and product.product_type_id IN ('$ids')";
        } else {
            $sql = "SELECT product.product_id, product.product_name, product.product_type_id, types_of_products.product_type_name, other_details.image, other_details.product_description, size_table.quantity, size_table.units, product_size_relation.price_per_unit, product_size_relation.real_product_id from product, other_details, types_of_products, product_size_relation, size_table where product.product_id = other_details.product_id and product.product_type_id = types_of_products.product_type_id and product.product_id = product_size_relation.product_id and size_table.size_id = product_size_relation.size_id and product.product_type_id = '".$subCategoryArray."'";
        }
        $result = mysqli_query($connection, $sql);
        $array = array();
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                array_push($array, json_encode($row));
            }
        }
        // print_r($array[10]);
        $json_data = json_encode($array);
        return $json_data;
    }
?>
