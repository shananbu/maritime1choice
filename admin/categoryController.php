<?php
include("config.php");
session_start();
if (!empty($_SESSION['login_user'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $action = addslashes($_POST['action']);

        if ($action == 'addCategory') {
            $categoryName = addslashes($_POST['categoryName']);
            $categoryStatus = addslashes($_POST['categoryStatus']);
            $categoryId = addslashes($_POST['categoryId']);
            if (!empty($categoryId)) {
                $sql = "UPDATE category SET name='$categoryName', status='$categoryStatus', updatedDate=  now() WHERE ID ='$categoryId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "Category updated successfully.";
                } else {
                    echo "Error while updating Category.";
                }
            } else {
                $sql = "INSERT INTO category (name, status, createdDate) VALUES ('$categoryName', '$categoryStatus', now())";
                if ($conn->query($sql) == TRUE) {
                    echo "Category created successfully.";
                } else {
                    echo "Error while adding Category.";
                }
            }
        } else if ($action == 'getAllCategories') {
            $sql = "SELECT * FROM category order by createdDate, updatedDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows);
        }
    }


} else {
    echo "Session Expired!";
}
?>