var allUsers = document.querySelectorAll('input[type="checkbox"]');
var mainCheck = document.getElementById("mainCheck");
var userList = document.getElementById("userTable");

mainCheck.addEventListener("click", function toggleAll(checks) {
    for (var i = 0; i < allUsers.length; i++) {
        if (allUsers[i] != checks) {
            allUsers[i].checked = checks.checked;
        }
    }
});

document.getElementById("addBtn").addEventListener("click", function() {
    var newRow = userList.insertRow(4);
    var newCell1 = newRow.insertCell(0);
    var newCell2 = newRow.insertCell(1);
    var newCell3 = newRow.insertCell(2);
    var newCell4 = newRow.insertCell(3);
    var newCell5 = newRow.insertCell(4);
    newCell1.innerHTML = 0;
    newCell2.innerHTML = "Anders Andersen";
    newCell3.innerHTML = "Wholesaler";
    newCell4.innerHTML = 0;
    newCell5.innerHTML = "";

    /*
    var userName = prompt("Enter the users name:", "");
    var userRole = prompt("Enter the users role:", "");
    var addRow = document.createElement("tr");
    var addCheck = document.createElement("td");
    var addName = document.createElement("td");
    var addRole = document.createElement("td");
    var nameNode = document.createTextNode(userName);
    var roleNode = document.createTextNode(userRole);
    addCheck.appendChild(checkNode);
    addName.appendChild(nameNode);
    addRole.appendChild(roleNode);
    addRow.appendChild(addCheck);
    addRow.appendChild(addName);
    addRow.appendChild(addRole);
    userList.appendChild(addRow);*/
});