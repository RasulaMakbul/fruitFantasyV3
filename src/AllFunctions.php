<?php

namespace AppControl;

include "./vendor/autoload.php";

use ConnectionControl\DBConn;

require_once "./src/dbcon.php";

class WebFunctions
{
    function __construct()
    {
        session_start();
    }

    public function storeUser($data)
    {
        $con = new DBConn;
        $conn = $con->dbConnection();


        $sql = "INSERT INTO users(fName,lName,email,phone,passw,gender) 
        VALUES(:fName,:lName,:email,:phone,:passw,:gender)";

        $statement = $conn->prepare($sql);
        $done = $statement->execute([
            ":fName" => $data['fName'],
            ":lName" => $data['lName'],
            ":email" => $data['email'],
            ":phone" => $data['phone'],
            ":passw" => $data['passw'],
            ":gender" => $data['gender']
        ]);
        //$_SESSION['massege'] = "Successfully Created !";

        return $done;
    }

    public function viewUser()
    {
        $con = new DBConn;
        $conn = $con->dbConnection();
        $statement = $conn->query('SELECT * FROM users');
        $result = $statement->fetchAll();

        return $result;
    }
    public function viewUserSingle($id)
    {
        $id = $_GET['id'];

        $con = new DBConn;
        $conn = $con->dbConnection();
        $query = "SELECT * FROM users WHERE id=:id LIMIT 1";
        $sql = $conn->prepare($query);



        $data = [':id' => $id];

        $sql->execute($data);
        $result = $sql->fetch(\PDO::FETCH_ASSOC); //FETCH_OBJ
        return $result;
    }
    public function updateUser($data, $id)
    {
        $con = new DBConn;
        $conn = $con->dbConnection();

        $sql = "UPDATE users SET fName=:fName,lName=:lName,email=:email,phone=:phone,passw=:passw,gender=:gender WHERE id=:id LIMIT 1";

        $statement = $conn->prepare($sql);
        $data = [
            ':fName' => $data['fName'],
            ':lName' => $data['lName'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':passw' => $data['passw'],
            ':gender' => $data['gender'],
            ':id' => $id,

        ];
        $statement->execute($data);
        $_SESSION['massege'] = "Successfully Updated !";
    }
    public function deleteUser($id)
    {

        $con = new DBConn;
        $conn = $con->dbConnection();


        $sql = $conn->prepare("DELETE FROM users WHERE id=$id");

        $sql->execute();
        $conn = null;
        $_SESSION['deleteMassege'] = "Successfully Deleted !";
        header("Location:userList.php");
    }

    public function storeCategory($data)
    {
        $con = new DBConn;
        $conn = $con->dbConnection();


        $sql = "INSERT INTO tblcatagories(name,products,description) 
        VALUES(:name,:products,:description)";

        $statement = $conn->prepare($sql);
        $done = $statement->execute([
            ":name" => $data['name'],
            ":products" => $data['products'],
            ":description" => $data['description']
        ]);
        $_SESSION['massege'] = "Successfully Created !";

        return $done;
    }

    public function viewCategories()
    {
        $con = new DBConn;
        $conn = $con->dbConnection();
        $statement = $conn->query('SELECT * FROM tblcatagories');
        $result = $statement->fetchAll();

        return $result;
    }
    public function viewCategorySingle($id)
    {
        $id = $_GET['id'];

        $con = new DBConn;
        $conn = $con->dbConnection();
        $query = "SELECT * FROM tblcatagories WHERE id=:id LIMIT 1";
        $sql = $conn->prepare($query);



        $data = [':id' => $id];

        $sql->execute($data);
        $result = $sql->fetch(\PDO::FETCH_ASSOC); //FETCH_OBJ
        return $result;
    }

    public function updateCategory($data, $id)
    {
        $con = new DBConn;
        $conn = $con->dbConnection();

        $sql = "UPDATE tblcatagories SET name=:name,products=:products,description=:description WHERE id=:id LIMIT 1";

        $statement = $conn->prepare($sql);
        $data = [
            ":name" => $data['name'],
            ":products" => $data['products'],
            ":description" => $data['description'],
            ':id' => $id,

        ];

        $statement->execute($data);
        $_SESSION['massege'] = "Successfully Updated !";
    }

    public function deleteCategory($id)
    {

        $con = new DBConn;
        $conn = $con->dbConnection();


        $sql = $conn->prepare("DELETE FROM tblcatagories WHERE id=$id");

        $sql->execute();
        $conn = null;
        $_SESSION['deleteMassege'] = "Successfully Deleted !";
        header("Location:categoryList.php");
    }
    public function storeProduct($data)
    {
        $con = new DBConn;
        $conn = $con->dbConnection();


        $sql = "INSERT INTO tblproduct(name,categoryName,quantity,description) 
        VALUES(:name,:categoryName,:quantity,:description)";

        $statement = $conn->prepare($sql);
        $done = $statement->execute([
            ":name" => $data['name'],
            ":categoryName" => $data['categoryName'],
            ":quantity" => $data['quantity'],
            ":description" => $data['description'],
        ]);
        $_SESSION['massege'] = "Successfully Created !";

        return $done;
    }

    public function viewProduct()
    {
        $con = new DBConn;
        $conn = $con->dbConnection();
        $statement = $conn->query('SELECT * FROM tblproduct');
        $result = $statement->fetchAll();

        return $result;
    }

    public function viewProductSingle($id)
    {
        $id = $_GET['id'];

        $con = new DBConn;
        $conn = $con->dbConnection();
        $query = "SELECT * FROM tblproduct WHERE id=:id LIMIT 1";
        $sql = $conn->prepare($query);



        $data = [':id' => $id];

        $sql->execute($data);
        $result = $sql->fetch(\PDO::FETCH_ASSOC); //FETCH_OBJ
        return $result;
    }

    public function updateProduct($data, $id)
    {
        $con = new DBConn;
        $conn = $con->dbConnection();

        $sql = "UPDATE tblproduct SET name=:name,categoryName=:categoryName,quantity=:quantity,description=:description WHERE id=:id LIMIT 1";

        $statement = $conn->prepare($sql);
        $data = [
            ":name" => $data['name'],
            ":categoryName" => $data['categoryName'],
            ":quantity" => $data['quantity'],
            ":description" => $data['description'],
            ':id' => $id,

        ];

        $statement->execute($data);
        $_SESSION['massege'] = "Successfully Updated !";
    }

    public function deleteProduct($id)
    {

        $con = new DBConn;
        $conn = $con->dbConnection();


        $sql = $conn->prepare("DELETE FROM tblproduct WHERE id=$id");

        $sql->execute();
        $conn = null;
        $_SESSION['deleteMassege'] = "Successfully Deleted !";
        header("Location:categoryList.php");
    }
}
