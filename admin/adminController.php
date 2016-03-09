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
                $sql = "UPDATE category SET name='$categoryName', status=$categoryStatus, updatedDate=  now() WHERE ID ='$categoryId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "Category updated successfully.";
                } else {
                    echo "Error while updating Category.";
                }
            } else {
                $sql = "INSERT INTO category (name, status, createdDate) VALUES ('$categoryName', $categoryStatus, now())";
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
        } else if ($action == 'addService') {
            $serviceName = addslashes($_POST['serviceName']);
            $serviceStatus = addslashes($_POST['serviceStatus']);
            $serviceDesc = addslashes($_POST['serviceDesc']);
            $categoryId = addslashes($_POST['categoryId']);
            $serviceId = addslashes($_POST['serviceId']);
            if (!empty($serviceId)) {
                $sql = "UPDATE BusinessService SET categoryId='$categoryId', name='$serviceName', status=$serviceStatus, description='$serviceDesc', updatedDate =  now() WHERE ID ='$serviceId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "Business Service updated successfully.";
                } else {
                    echo "Error while updating BusinessService.";
                }
            } else {
                $sql = "INSERT INTO BusinessService (categoryId, name, description, status, createdDate) VALUES ($categoryId, '$serviceName', '$serviceDesc', $serviceStatus, now())";
                if ($conn->query($sql) == TRUE) {
                    echo "Business Service created successfully.";
                } else {
                    echo "Error while adding Business Service.";
                }
            }
        } else if ($action == 'getAllBusinessService') {
            $sql = "SELECT b.*, c.name categoryName FROM BusinessService b, Category c where b.categoryId = c.id order by createdDate, updatedDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows);
        } else if ($action == 'addNews') {
            $newTitle = addslashes($_POST['newTitle']);
            $newStatus = addslashes($_POST['newStatus']);
            $newDescription = addslashes($_POST['newDescription']);
            $newsId = addslashes($_POST['newsId']);
            if (!empty($newsId)) {
                $sql = "UPDATE News SET title='$newTitle', description='$newDescription', status=$newStatus, updatedDate =  now() WHERE ID ='$newsId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "News updated successfully.";
                } else {
                    echo "Error while updating news.";
                }
            } else {
                $sql = "INSERT INTO News (title, description, status, createdDate) VALUES ('$newTitle', '$newDescription', $newStatus, now())";
                echo $sql;
                if ($conn->query($sql) == TRUE) {
                    echo "News created successfully.";
                } else {
                    echo "Error while adding news.";
                }
            }
        } else if ($action == 'getAllNews') {
            $sql = "SELECT * FROM News order by createdDate, updatedDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows);
        } else if ($action == 'addCareers') {
            $jobTitle = addslashes($_POST['jobTitle']);
            $location = addslashes($_POST['location']);
            $qualification = addslashes($_POST['qualification']);

            $experience = addslashes($_POST['experience']);
            $numberOfPositions = addslashes($_POST['numberOfPositions']);
            $validity = addslashes($_POST['validity']);
            $jobDescription = addslashes($_POST['jobDescription']);
            $jobStatus = addslashes($_POST['jobStatus']);

            $jobId = addslashes($_POST['jobId']);

            if (!empty($jobId)) {
                $sql = "UPDATE Careers SET title = '$jobTitle' , location = '$location', qualification = '$qualification', experience = '$experience', noofpositions = '$numberOfPositions', validity = '$validity', description = '$jobDescription', status = $jobStatus, updatedDate =  now() WHERE ID ='$jobId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "News updated successfully.";
                } else {
                    echo "Error while updating news.";
                }
            } else {
                $sql = "INSERT INTO Careers (title, location, qualification, experience, noofpositions, validity, description, status, createdDate)
                        VALUES ('$jobTitle', '$location', '$qualification', '$experience', '$numberOfPositions', '$validity', '$jobDescription', $jobStatus, now())";
                echo $sql;
                if ($conn->query($sql) == TRUE) {
                    echo "News created successfully.";
                } else {
                    echo "Error while adding news.";
                }
            }
        } else if ($action == 'getAllCareers') {
            $sql = "SELECT * FROM Careers order by createdDate, updatedDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows);
        }else if ($action == 'addClient') {
            $clientName = addslashes($_POST['clientName']);
            $referenceUrl = addslashes($_POST['referenceUrl']);
            $clientStatus = addslashes($_POST['clientStatus']);
            $clientDescription = addslashes($_POST['clientDescription']);
            $clientLogo = addslashes($_POST['clientLogo']);

            $clientId = addslashes($_POST['clientId']);

            if (!empty($clientId)) {
                $sql = "UPDATE Client SET name = '$clientName' , referenceUrl = '$referenceUrl', description = '$clientDescription', status = $clientStatus, updatedDate =  now() WHERE ID ='$clientId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "News updated successfully.";
                } else {
                    echo "Error while updating news.";
                }
            } else {
                $sql = "INSERT INTO Client (name, referenceUrl, description, status, createdDate)
                        VALUES ('$clientName', '$referenceUrl', '$clientDescription', $clientStatus, now())";
                echo $sql;
                if ($conn->query($sql) == TRUE) {
                    echo "Client created successfully.";
                } else {
                    echo "Error while adding client.";
                }
            }
        } else if ($action == 'getAllClients') {
            $sql = "SELECT * FROM Client order by createdDate, updatedDate desc";
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