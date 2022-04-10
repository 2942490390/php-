<?php
// 编写九九乘法表
// 1. 定义一个数组
$arr = array();
// 2. 循环遍历
for($i = 1; $i <= 9; $i++){
    for($j = 1; $j <= $i; $j++){
        $arr[$i][$j] = $i . '*' . $j . '=' . $i * $j;
    }
}
// 3. 输出
echo '<table border="0">';
for($i = 1; $i <= 9; $i++){
    echo '<tr>';
    for($j = 1; $j <= $i; $j++){
        echo '<td>' . $arr[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
