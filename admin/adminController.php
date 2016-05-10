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
            $displayOrder = addslashes($_POST['displayOrder']);
            $showInHome = addslashes($_POST['showInHome']);
            $description = addslashes($_POST['categoryDesc']);
            if (!empty($categoryId)) {
                $sql = "UPDATE Category SET name='$categoryName', status=$categoryStatus, displayOrder='$displayOrder', hasToShowInHome=$showInHome, description='$description', updatedDate=  now() WHERE ID ='$categoryId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "Category updated successfully.";
                } else {
                    echo "Error while updating Category.";
                }
            } else {
                $sql = "INSERT INTO Category (name, status, displayOrder, description, hasToShowInHome, createdDate) VALUES ('$categoryName', $categoryStatus, '$displayOrder', '$description', $showInHome, now())";
                if ($conn->query($sql) == TRUE) {
                    echo "Category created successfully.";
                } else {
                    echo "Error while adding Category.";
                }
            }
        } else if ($action == 'getAllCategories') {
            $sql = "SELECT * FROM Category order by createdDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows, JSON_PARTIAL_OUTPUT_ON_ERROR);
        } else if ($action == 'addService') {
            $serviceName = addslashes($_POST['serviceName']);
            $serviceStatus = addslashes($_POST['serviceStatus']);
            $serviceDesc = addslashes($_POST['serviceDesc']);
            $categoryId = addslashes($_POST['categoryId']);
            $serviceId = addslashes($_POST['serviceId']);
            $displayOrder = addslashes($_POST['displayOrder']);

            if (!empty($serviceId)) {
                $sql = "UPDATE BusinessService SET categoryId='$categoryId',  displayOrder='$displayOrder', name='$serviceName', status=$serviceStatus, description='$serviceDesc', updatedDate =  now() WHERE ID ='$serviceId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "Business Service updated successfully.";
                } else {
                    echo "Error while updating BusinessService.";
                }
            } else {
                $sql = "INSERT INTO BusinessService (categoryId, name, description, displayOrder, status, createdDate) VALUES ($categoryId, '$serviceName', '$serviceDesc', '$displayOrder', $serviceStatus, now())";
                if ($conn->query($sql) == TRUE) {
                    echo "Business Service created successfully.";
                } else {
                    echo "Error while adding Business Service.";
                }
            }
        } else if ($action == 'getAllBusinessService') {
            $sql = "SELECT b.*, c.name categoryName FROM BusinessService b, Category c where b.categoryId = c.id order by createdDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows, JSON_PARTIAL_OUTPUT_ON_ERROR);
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
                if ($conn->query($sql) == TRUE) {
                    echo "News created successfully.";
                } else {
                    echo "Error while adding news.";
                }
            }
        } else if ($action == 'getAllNews') {
            $sql = "SELECT * FROM News order by createdDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows, JSON_PARTIAL_OUTPUT_ON_ERROR);
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
                    echo "Career updated successfully.";
                } else {
                    echo "Error while updating news.";
                }
            } else {
                $sql = "INSERT INTO Careers (title, location, qualification, experience, noofpositions, validity, description, status, createdDate)
                        VALUES ('$jobTitle', '$location', '$qualification', '$experience', '$numberOfPositions', '$validity', '$jobDescription', $jobStatus, now())";
                if ($conn->query($sql) == TRUE) {
                    echo "Career created successfully.";
                } else {
                    echo "Error while adding career.";
                }
            }
        } else if ($action == 'getAllCareers') {
            $sql = "SELECT * FROM Careers order by createdDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows, JSON_PARTIAL_OUTPUT_ON_ERROR);
        }else if ($action == 'addClient') {
            $clientName = addslashes($_POST['clientName']);
            $referenceUrl = addslashes($_POST['referenceUrl']);
            $clientStatus = addslashes($_POST['clientStatus']);
            $clientDescription = addslashes($_POST['clientDescription']);

            $clientId = addslashes($_POST['clientId']);

            if (!empty($clientId)) {
                $logoFileName = "";
                if(isset($_FILES['clientLogo'])){
                    $file_name = $_FILES['clientLogo']['name'];
                    $file_tmp =$_FILES['clientLogo']['tmp_name'];
                    $logoFileName = "cImages/".rand()."_".$file_name;
                    move_uploaded_file($file_tmp, $logoFileName);
                    $sql = "UPDATE Client SET  logoFileName='$logoFileName', updatedDate =  now() WHERE ID ='$clientId' ";
                    $conn->query($sql);
                }

                $sql = "UPDATE Client SET name = '$clientName' , referenceUrl = '$referenceUrl', description = '$clientDescription', status = $clientStatus, updatedDate =  now() WHERE ID ='$clientId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "Client updated successfully.";
                } else {
                    echo "Error while updating Client.";
                }
            } else {
                $logoFileName = "";
                if(isset($_FILES['clientLogo'])){
                    $file_name = $_FILES['clientLogo']['name'];
                    $file_tmp =$_FILES['clientLogo']['tmp_name'];
                    $logoFileName = "cImages/".rand()."_".$file_name;
                    move_uploaded_file($file_tmp, $logoFileName);
                }
                $sql = "INSERT INTO Client (name, referenceUrl, description, status, logoFileName, createdDate)
                        VALUES ('$clientName', '$referenceUrl', '$clientDescription', $clientStatus, '$logoFileName', now())";

                if ($conn->query($sql) == TRUE) {
                    echo "Client created successfully.";
                } else {
                    echo "Error while adding client.";
                }
            }
        } else if ($action == 'getAllClients') {
            $sql = "SELECT * FROM Client order by createdDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows, JSON_PARTIAL_OUTPUT_ON_ERROR);
        } else if ($action == 'getAllTestimonial') {
            $sql = "SELECT t.id, c.name, t.testimonialBy, t.description, t.status, c.id cid  FROM Testimonial t, Client c where t.id = c.id  order by t. createdDate desc";
            $result = mysqli_query($iCon, $sql);
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows, JSON_PARTIAL_OUTPUT_ON_ERROR);
        } else if ($action == 'addTestimonial') {
            $clientId = addslashes($_POST['clientId']);
            $feedbackBy = addslashes($_POST['feedbackBy']);
            $feedbackStatus = addslashes($_POST['feedbackStatus']);
            $feedback = addslashes($_POST['feedback']);
            $feedbackId = addslashes($_POST['feedbackId']);

            if (!empty($feedbackId)) {
                $sql = "UPDATE Testimonial SET clientId = '$clientId' , testimonialBy = '$feedbackBy', description = '$feedback', status = $feedbackStatus, updatedDate =  now() WHERE ID ='$feedbackId' ";
                if ($conn->query($sql) == TRUE) {
                    echo "Testimonial updated successfully.";
                } else {
                    echo "Error while updating Testimonial.";
                }
            } else {
                $sql = "INSERT INTO Testimonial (clientId, testimonialBy, description, status, createdDate)
                        VALUES ($clientId, '$feedbackBy', '$feedback' ,$feedbackStatus, now())";
                if ($conn->query($sql) == TRUE) {
                    echo "Testimonial created successfully.";
                } else {
                    echo "Error while adding Testimonial.";
                }
            }
        }
    }
    $conn = null;
    mysqli_close($iCon);
} else {
    echo "Session Expired!";
}
?>

