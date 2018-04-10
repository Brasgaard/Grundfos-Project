<!DOCTYPE html>
<html>
<head>
    <title>Grundfos Ecademy - User management</title>
    <?php include 'include/head.php';?>
</head>
<body>
    <div class="gridContainer">

    <?php include 'include/header.php';?>


    <?php include 'include/navigation.php';?>

        <div class="gridContainer__div mainContent">
            <h1 class="userList__h1">Manage your employees within the Grundfos Ecademy</h1>
            <p class="userList__p">Add users and assign courses, or check the stadings of current users within your organization.</p>
            <button id="addBtn" class="userListBtn">Add User</button>
            <button id="courseBtn" class="userListBtn">Assign Course</button>
            <button id="removeBtn" class="userListBtn">Remove User</button>
            <table class="mainContent__userList">
                <tr id="mainListRow">
                    <th><input type="checkbox" name="" id="mainCheck">Select all</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Points</th>
                    <th>Courses</th>
                </tr>
                <tr>
                    <td><input type="checkbox" name="userCheck" id=""></td>
                    <td>Lukas Brøndel</td>
                    <td>Wholesaler</td>
                    <td>5000</td>
                    <td>Magna 2</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="userCheck" id=""></td>
                    <td>Alexander Braasgard</td>
                    <td>Engineer</td>
                    <td>7000</td>
                    <td>Pumps</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="userCheck" id=""></td>
                    <td>Sean Ryg</td>
                    <td>Commercial Builder</td>
                    <td>10000</td>
                    <td>Heaters</td>
                </tr>
            </table>
        </div>
    </div>

    <?php include 'include/footer.php';?>
    
<script src="js/userlist.js"></script>    
</body>
</html>