<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Userlist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="scss/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="gridContainer">

        <header class="gridContainer__div grundfosHeader">
            <p>Test</p>
        </header>

        <div class="gridContainer__div leftNavMenu">
            <a href="index.php" class="leftNavMenu__a">Home</a>
            <a href="manageusers.php" class="leftNavMenu__a">Users</a>
            <a href="rewards.php" class="leftNavMenu__a">Rewards</a>
            <a href="diplomas.php" class="leftNavMenu__a">Diplomas</a>
        </div>

        <div class="gridContainer__div mainContent">
            <h1 class="mainContent__h1">Manage your employees within the Grundfos Ecademy</h1>
            <p class="mainContent__p">Add users and assign courses, or check the stadings of current users within your organization.</p>
            <button id="addBtn">Add User</button>
            <button id="courseBtn">Assign Course</button>
            <button id="removeBtn">Remove User</button>
            <table class="mainContent__userList">
                <tr id="mainListRow">
                    <th><input type="checkbox" name="" id="mainCheck">Select all</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Points</th>
                    <th>Courses</th>
                </tr>
                <tr class="userRow">
                    <td><input type="checkbox" name="userCheck" id=""></td>
                    <td>Lukas Brøndel</td>
                    <td>Wholesaler</td>
                    <td>5000</td>
                    <td>Magna 2</td>
                </tr>
                <tr class="userRow">
                    <td><input type="checkbox" name="userCheck" id=""></td>
                    <td>Alexander Braasgard</td>
                    <td>Engineer</td>
                    <td>7000</td>
                    <td>Pumps</td>
                </tr>
                <tr class="userRow">
                    <td><input type="checkbox" name="userCheck" id=""></td>
                    <td>Sean Ryg</td>
                    <td>Commercial Builder</td>
                    <td>10000</td>
                    <td>Heaters</td>
                </tr>
            </table>
        </div>

        <footer class="gridContainer__div grundfosFooter">
            <p>Test</p>
        </footer>

    </div>
<script src="js/userlist.js"></script>    
</body>
</html>