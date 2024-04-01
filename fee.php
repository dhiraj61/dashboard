<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
    <label for="">Course</label>
    <select name="course" id="course" class="course" onchange="printSelectedValue()">
        <option value="BCA">BCA</option>
        <option value="BCOM">BCOM</option>
        <option value="BBA">BBA</option>
    </select>
    <input type="submit" name="sub">
    <?php
if(isset($_POST['sub'])) {
    $selectedCourse = $_POST['course'];
 
    echo "<script>alert('hii')</script>";
}
?>


    <div class="car" style="width:0px;height:0px;background-color:red;">
        <i class="fa-solid fa-user-tie" style="font-size: 4.5vw;position:absolute;top:25%;right:5%;"></i>
        <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">Numbers of <span class="selected"></span></h4>
        <button type="submit" class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;">Submit</button>
    </div>
</form>

<script>
    function printSelectedValue() {
        var selectedCourse = document.getElementById("course").value;
        var selectedSpan = document.querySelector(".selected");
        selectedSpan.innerHTML = selectedCourse;
    }
</script>

</body>
</html>