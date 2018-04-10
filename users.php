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

            <div id="listHeader">
                <h2 class="listHeader__h2">Manage Users</h2>
                <input type="text" id="nameInput" placeholder="Users name...">
                <select name="roles" id="rolesDrop">
                    <option value="Channel Partner">Channel Partner</option>
                    <option value="Heating Engineer">Heating engineer</option>
                    <option value="Industry Engineer">Industry engineer</option>
                </select>
                <button id="addBtn" class="userListBtn">Add User</button>
                <select name="courses" id="courseDrop">
                    <option value="AUTOADAPT">Grundfos AUTOADAPT</option>
                    <option value="SCALA2">SCALA2 pump</option>
                    <option value="ALPHA3">Grundfos ALPHA3</option>
                    <option value="MAGNA3">Grundfos MAGNA3</option>
                </select>
                <button id="courseBtn" class="userListBtn">Assign Course</button>
            </div>

            <table class="mainContent__userList" id="userTable">
                <tr id="mainListRow">
                    <th><input type="checkbox" name="" id="mainCheck">Select all</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Points</th>
                    <th>Courses</th>
                </tr>
                <tr>
                    <td><input type="checkbox" name="user" id=""></td>
                    <td>Sean Ryg</td>
                    <td>Channel Partner</td>
                    <td>10000</td>
                    <td>SCALA2</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="user" id=""></td>
                    <td>Alexander Braasgard</td>
                    <td>Heating Engineer</td>
                    <td>7000</td>
                    <td>ALPHA3</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="user" id=""></td>
                    <td>Lukas Brøndel</td>
                    <td>Industry Engineer</td>
                    <td>5000</td>
                    <td>MAGNA3</td>
                </tr>
            </table>
        </div>
    </div>

    <?php include 'include/footer.php';?>
    
<script src="js/userlist.js"></script>    
</body>
</html>