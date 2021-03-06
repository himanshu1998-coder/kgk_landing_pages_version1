<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
form{
    text-align: center;
}
input{
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 70%;
    font-size: 20px;
    margin: 10px 0;
    color: #fff;
    outline: none;
    border: 1px solid #eee;
    border-radius: 7px;
    padding: 15px 18px;
    background: none;
}
.heading{
    font-size: 20px;
    text-align: center;
}
.login{
    letter-spacing: 2px;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 70%;
    font-size: 20px;
    margin: 10px 0;
    color: darkgray;
    outline: none;
    border: 1px solid #eee;
    border-radius: 7px;
    padding: 15px 18px;
    background: #fff;
}
.form{
    position: fixed;
    z-index: 999999;
    top: 0%;
    left: 0%;
    height: 100%;
    width: 100%;
    background: linear-gradient(
45deg
, #302f6cb8, #39587963);
    text-align: center;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
.login_form{
    height: 100%;
    display: flex;
    align-items: center;
    background: linear-gradient(
113deg
, #1d1c1c, #fdcccc73);
    justify-content: center;
}
h1{
    font-size: 50px;
    font-weight: lighter;
    font-family: sans-serif;
}
.none{
    display: none;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
#exportBtn1{
    width: -webkit-fill-available;
    color: #fff;
    background-color: blue;
    letter-spacing: 5px;
    font-weight: bold;
    background-color: blue;
    font-size: x-large;
}
</style>
</head>
<body>
    <div class="form">
        <div class="login_form">
            <div>
                <h1>Welcome!</h1>
                <form onsubmit="formSubmit(event)" id="myform" method="POST" action="data.php">
                    <input type="text" id="username" placeholder="Username" autocomplete="off">
                    <input type="password" id="password" placeholder="Password" autocomplete="off">
                    <button class = "login">Login</button>
                </form>
            </div>
        </div>
    </div>

<table class="table none" id = "tab1">
    <div class ="downloadButton none">
        <button id="exportBtn1">Download The Table</button>
    </div>
<h1 class="heading none">The Enquiry Table</h1>
<tr>
<th>ID</th>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>Date</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "" );
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT user_id, quiryname, quiryemail, quiryphone, DATE FROM kgk_reality.navnilayquiry"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["quiryname"]. "</td><td>"
. $row["quiryemail"]. "</td><td>" . $row["quiryphone"]. "</td><td>" . $row["DATE"]. "</td></tr>";
}
echo "</table>";
} else { }
$conn->close();
?>
</table>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
<script>
document.querySelector("#exportBtn1").addEventListener('click', function(){
        TableToExcel.convert(document.getElementById("tab1"), {
            name: "Traceability.xlsx",
            sheet: {
            name: "Sheet1"
            }
          });
        });
const defaultuserName = 'kgkrealty';
const defaultpassword = "kgkrealty@)(*";
const downloadButton = document.querySelector('.downloadButton')
const hideform = document.querySelector(".form");
const inputs = document.getElementById("myform").elements;
const inputUserName = document.querySelector("#username");
const inputPassword = document.querySelector("#password");
const dataTable = document.querySelector(".table");
const dataHeading = document.querySelector(".heading");
const formSubmit = function(event){
    event.preventDefault()
    console.log(inputUserName.value)
    console.log(inputPassword.value)
    const formInput = {
        usernameInput : inputUserName.value,
        passwordInput : inputPassword.value,
    };
    if (formInput.usernameInput == defaultuserName && formInput.passwordInput == defaultpassword) {
        dataHeading.classList.remove("none");
        dataTable.classList.remove("none");
        hideform.classList.add("none");
        downloadButton.classList.remove('none');
    }
    else{
        window.reload();
    }
}


</script>
</body>
</html>