<?php

include_once('../configs/db.php');

if (isset($_POST['submit_insert'])) {
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'stock' => $_POST['stock'],
    ];
    insert($data);
}

function insert($data)
{
    global $con;
    $name = $con->real_escape_string($data['name']);
    $description = $con->real_escape_string($data['description']);
    $price = $con->real_escape_string($data['price']);
    $stock = $con->real_escape_string($data['stock']);
    $insert = $con->query("INSERT INTO tbl_products (name, description, price, stock)
                            VALUE ('$name','$description','$price','$stock')");

    if (!$insert) {
        echo "Insert failed";
        die();
    }
    echo "Insert Success<br/>
    <a href='../views/list.php'>Kembali<a>";
}

function getList()
{
    global $con;
    $result = [];
    $list = $con->query("SELECT * FROM tbl_products");
    while ($row = $list->fetch_assoc()) {
        array_push($result, $row);
    }
    return $result;
}

if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];
    $delete = $con->query("DELETE FROM tbl_products WHERE id='$id'");
    if (!$delete) {
        echo "delete failed";
        die();
    }
    echo "delete Success<br/>
    <a href='../views/list.php'>Kembali</a>";
}


function detail($id){
    global $con;
    $detail = $con->query("SELECT * FROM tbl_products WHERE id='$id'");
    return $detail->fetch_assoc();
}
function update($data, $id)
{
    global $con;
    $name = $con->real_escape_string($data['name']);
    $description = $con->real_escape_string($data['description']);
    $price = $con->real_escape_string($data['price']);
    $stock = $con->real_escape_string($data['stock']);
    $update = $con->query("UPDATE tbl_products SET name='$name', description='$description', price='$price', stock='$stock' 
                            WHERE id='$id'");
    if (!$update) {
        echo "update failed";
        die();
    }
    echo "Update Success<br/>
    <a href='../views/list.php'>Kembali<a>";
}
