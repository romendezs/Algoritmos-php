<?php
include 'quick-sort.php';
include 'binary-search.php';
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
        <label for="numbers">Enter numbers separated by commas</label>
        <input type="text" name="arr" placeholder="Type numbers here">
        <button type="submit">Sort</button>
        <br>
        <br>
    </form>

    <form method="post" action="">
        <label for="numbers">Enter an ordered numbers list separated by commas</label>
        <input type="text" name="arr-2" placeholder="Type numbers here">
        <br>
        <label for="x">Enter number to search</label>
        <input type="text" name="x" id="">
        <button type="submit">Search</button>

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //QuickSort
        if (isset($_POST['arr'])) {
            $arr = explode(',', $_POST['arr']);
            quickSort($arr, 0, count($arr) - 1);
            echo 'Sorted array: ' . implode(',', $arr);
        }

        //BinarySearch
        if (isset($_POST['arr-2'])) {
            $arr = explode(',', $_POST['arr-2']);
            $x = $_POST['x'];
            
            $result = binarySearch($arr, $x);

            if ($result == -1) {
                echo 'Element is not present in array';
            } else {
                echo 'Element is present at index ' . $result;
            }
        }
    }
    ?>
</body>

</html>