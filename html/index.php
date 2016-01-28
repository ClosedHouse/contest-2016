<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
session_regenerate_id();

if(!is_numeric($_SESSION['task'])) $_SESSION['task'] = 1;

// Answers:
$answers = array(
    1 => "abcd",
    2 => "defg",
);

if($_POST)
{
    if($answers[$_SESSION['task']] == $_POST['answer'])
    {
        $_SESSION['task']++;
    }
    else
    {
        $error = "This is not the correct answer";
    }
}

?>
<html>
<head>
    <title>Red Hat OpenHouse 2016</title>
    <style>
    * {
        background-color: black;
        color: white;
    }
    pre {
        color: darkgreen;
    }
    </style>
</head>

<body>



<table rules="all">
<tr>
   <td>
        <h1>Hack me if you can</h1>
    </td>
</tr>
<tr>
   <td> 
        <p>Superb game for openhouse!</p>
        <p style="color:red;"><?=$error?></p>
    </td>
</tr>
<tr>
    <td>
        <?php
        include 'task' . $_SESSION['task'] . '.php';
        ?>
    </td>
</tr>
</table>

</body>
</html>
