var allUsers = document.querySelectorAll('input[type="checkbox"]');
var mainCheck = document.getElementById("mainCheck");
var userList = document.getElementById("userTable");

/*mainCheck.addEventListener("click", function toggleAll(checks) {
    for (var i = 0; i < allUsers.length; i++) {
        if (allUsers[i] != checks) {
            allUsers[i].checked = checks.checked;
        }
    }
});*/

var myUserList = document.getElementsByTagName("tr");
var i;
for (i = 0; i < myUserList.length; i++) {
    var removeBtn = document.createElement("button");
    var removeTxt = document.createTextNode("X");
    removeBtn.className = "removeBtn";
    removeBtn.appendChild(removeTxt);
    myUserList[i].appendChild(removeBtn);
}

var remove = document.getElementsByClassName("removeBtn");
var i;
for (i = 0; i < remove.length; i++) {
    remove[i].onclick = function() {
        var row = this.parentElement;
        row.style.display = "none";
    }
}

document.getElementById("addBtn").addEventListener("click", function() {
    var userName = document.getElementById("nameInput").value;
    var userRole = document.getElementById("rolesDrop").value;
    var userCheck = document.createElement("input");
    userCheck.type = "checkbox";
    userCheck.className = "userCheck";
    var newRow = userList.insertRow(4);
    var checkCell = newRow.insertCell(0);
    var nameCell = newRow.insertCell(1);
    var roleCell = newRow.insertCell(2);
    var rankCell = newRow.insertCell(3);
    var courseCell = newRow.insertCell(4);
    courseCell.className = "assignCourse";
    //var courseCell = newRow.insertCell(4);
    checkCell.appendChild(userCheck);
    nameCell.innerHTML = userName;
    roleCell.innerHTML = userRole;
    rankCell.innerHTML = 0;
    courseCell.innerHTML = "Test";

    var removeBtn = document.createElement("button");
    var removeTxt = document.createTextNode("X");
    removeBtn.className = "removeBtn";
    removeBtn.appendChild(removeTxt);
    newRow.appendChild(removeBtn);

    for (i = 0; i < remove.length; i++) {
        remove[i].onclick = function() {
            var row = this.parentElement;
            row.style.display = "none";
        }
    }
});

document.getElementById("courseBtn").addEventListener("click", function() {
    console.log("Click on assign course");
    var courseCells = document.getElementsByClassName("assignCourse");
    console.log(courseCells[0]);
    var assignCourse = document.getElementById("courseDrop").value;
    console.log(assignCourse);
    courseCells[0].innerHTML = assignCourse;
});

    /*var checkRows = document.getElementById("userTable").rows;
    var i;

    for (i = 1; i < checkRows.length; i++) {
        if (checkRows.getElementsByClassName("userCheck")[i].getElementsByTagName("input")[0].checked==true) {
            var checkedCourseCells = checkRows[i].cells[4];
            checkedCourseCells.innerHTML = assignCourse;
        }
    }
*/