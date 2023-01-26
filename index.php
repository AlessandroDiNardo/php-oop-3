<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    require_once ('db.php');
    require_once ('models/person.php');
    require_once ('models/manager.php');
    require_once ('models/employee.php');
    require_once ('models/salary.php');
?>
<body>
    <div class="container">
        <div class="data-container">
            <div class="person">
                <?php
                    echo "<h2>PERSON</h2>";
                    echo $person1 -> getHtml();
                ?>
            </div>
            
            <div class="manager">
                <?php
                    echo "<h2>MANAGER</h2>";
                    echo $manager1 -> getHtml();
                ?>
            </div> 
            
            <div class="employee">
                <?php
                    echo "<h2>EMPLOYEE</h2>";
                    echo $employee1 -> getHtml();
                ?>
            </div>

            <div class="SALARY">
                <?php
                    echo "<h2>SALARY</h2>";
                    echo $salary1 -> getHtml();
                ?>
            </div>
        </div>
    </div> 
</body>
<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        max-width: 1000px;
        margin: 0 auto;
    }

    .data-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 100px;
        margin: 250px 0;
        width: 100%;
        line-height: 30px;
    }
</style>
</html>