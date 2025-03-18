<?php
$link=false;
function openDB()
{
    global $link;
    $link=mysqli_connect("localhost", "root", "", "school");
    mysqli_query($link, "SET NAMES UTF8");
}
function closeDB()
{
    global $link;
    mysqli_close($link);
}
function getInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM classes");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function deleteByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "DELETE FROM classes WHERE class_id=$id");
    closeDB();
    return $res;
}
function addClass($class_number, $class_leter, $teacher)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "INSERT into classes (class_number, class_leter, teacher_id) value ('$class_number', '$class_leter', '$teacher')");
    closeDB();
    return $res;
}
function getTeachers()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM teachers");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
?>