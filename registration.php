<?php
include "functionsDB.php";
$teachers=getTeachers();
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="design.css">
        <title>Регистрация</title>
    </head>
    <body>
        <div>
            <form action="addController.php" method="POST" role='form'>
                <div>
                    <div>
                        <label for="class_number">Номер класса</label>
                        <div>
                            <input id="class_number" type="number" name="class_number"/>
                        </div>
                    </div>
                    <div>
                        <label for="class_leter">Буква класса</label>
                        <div>
                            <input id="class_leter" type="text" name="class_leter"/>
                        </div>
                    </div>
                    <div>
                        <label for="teacher">Учитель</label>
                        <div>
                            <select id="teacher" name="teacher">
                                <?php
                                for($i=0; $i<count($teachers); $i++)
                                {
                                    $id=$teachers[$i]['teacher_id'];
                                    $teacher=$teachers[$i]['passport_data'];
                                    echo '<option value="'.$id.'">'.$teacher.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="add">Добавить</button>
                </div>
            </form>
        </div>
    </body>
</html>