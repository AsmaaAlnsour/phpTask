//ajax.php
<?php
$action = $_REQUEST['action'];
 
if (!empty($action)) {
    require_once 'Employee.php';
    $obj = new Employee();
}
 
if ($action == 'addnew' && !empty($_POST)) {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $office = $_POST['office'];
    $photo = $_FILES['photo'];
    $employeeID = (!empty($_POST['employeeid'])) ? $_POST['employeeid'] : '';
 
    // file (photo) upload
    $imagename = '';
    if (!empty($photo['name'])) {
        $imagename = $obj->uploadPhoto($photo);
        $employeeData = [
            'name' => $name,
            'position' => $position,
            'office' => $office,
            'photo' => $imagename,
        ];
    } else {
        $employeeData = [
            'name' => $name,
            'position' => $position,
            'office' => $office,
        ];
    }
 
    if ($employeeID) {
        $obj->update($employeeData, $employeeID);
    } else {
        $employeeID = $obj->add($employeeData);
    }
 
    if (!empty($employeeID)) {
        $employeejson = $obj->getRow('id', $employeeID);
        echo json_encode($employeejson);
        exit();
    }
}
 
if ($action == "getusers") {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 4;
    $start = ($page - 1) * $limit;
 
    $employee = $obj->getRows($start, $limit);
    if (!empty($employee)) {
        $employeelist = $employee;
    } else {
        $employeelist = [];
    }
    $total = $obj->getCount();
    $empjson = ['count' => $total, 'jsonemplyee' => $employeelist];
    echo json_encode($empjson);
    exit();
}
 
if ($action == "getuser") {
    $employeeID = (!empty($_GET['id'])) ? $_GET['id'] : '';
    if (!empty($employeeID)) {
        $employeejsongetuser = $obj->getRow('id', $employeeID);
        echo json_encode($employeejsongetuser);
        exit();
    }
}
 
if ($action == "deletetemployee") {
    $employeeID = (!empty($_GET['id'])) ? $_GET['id'] : '';
    if (!empty($employeeID)) {
        $isDeleted = $obj->deleteRow($employeeID);
        if ($isDeleted) {
            $message = ['deleted' => 1];
        } else {
            $message = ['deleted' => 0];
        }
        echo json_encode($message);
        exit();
    }
}
 
if ($action == 'search') {
    $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) : '';
    $results = $obj->searchEmployee($queryString);
    echo json_encode($results);
    exit();
}