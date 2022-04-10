<?php
#使用PHP构造一个二维数组，要求存储5个学生的成绩信息，包含：学号，姓名，MySQL,PHP,HTML 三个课程的成绩,将学生信息，在html上进行以表格形式输出。
header("Content-Type:text/html;charset=utf-8");
$arr = [
    0 => ['id' => 's1','name' => '张三','MYSQL' => '80','PHP' => '90','HTML' => '70'],
    1 => ['id' => 's2','name' => '李四','MYSQL' => '70','PHP' => '60','HTML' => '80'],
    2 => ['id' => 's3','name' => '王五','MYSQL' => '90','PHP' => '80','HTML' => '90'],
    3 => ['id' => 's4','name' => '赵六','MYSQL' => '60','PHP' => '70','HTML' => '80'],
    4 => ['id' => 's5','name' => '孙七','MYSQL' => '80','PHP' => '90','HTML' => '70']
];
$page_title = "二维数组的输出";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
</head>
<body>
    <table border="1" width="80%">
        <tr>
            <td>学号</td><td>姓名</td><td>MYSQL</td><td>PHP</td><td>HTML</td>
        </tr>
        <?php foreach ($arr as $key => $val) { ?>
            <tr>
                <td><?PHP echo $val['id'] ?></td>
                <td><?PHP echo $val['name'] ?></td>
                <td><?PHP echo $val['MYSQL'] ?></td>
                <td><?PHP echo $val['PHP'] ?></td>
                <td><?PHP echo $val['HTML'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
