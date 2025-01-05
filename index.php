<?php
include 'quick-sort.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="">
        <label for="numbers">Enter numbers separated by comma</label>
        <input type="text" name="arr" placeholder="Type numbers here">
        <button type="submit">Sort</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //QuickSort
        $arr = explode(',', $_POST['arr']);
        quickSort($arr, 0, count($arr) - 1);
        echo 'Sorted array: ' . implode(',', $arr);
    }
    ?>
</body>

</html>