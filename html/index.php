<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
session_regenerate_id();

if($_GET['restart'])
{
    session_destroy();
    header("Location: /");
}

function show_hint()
{
    global $hints;
    if($_POST['answer'] == 'hint')
    {
        if(!is_numeric($_SESSION['hint'][$_SESSION['task']])) $_SESSION['hint'][$_SESSION['task']] = 0;

        echo '<strong>Hint #'.($_SESSION['hint'][$_SESSION['task']]+1).'</strong><br>';
        echo $hints[$_SESSION['hint'][$_SESSION['task']]];

        $_SESSION['hint'][$_SESSION['task']]++;
        if($_SESSION['hint'][$_SESSION['task']] > (count($hints)-1))
        {
            $_SESSION['hint'][$_SESSION['task']] = count($hints) - 1;
        }
    }
}

function is_hint()
{
    return $_POST['answer'] == 'hint' ? TRUE : FALSE;
}

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
    elseif($_POST['answer'] != 'hint')
    {
        $error = "WRONG ANSWER";
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
    .hint {
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
    </td>
</tr>
<tr>
    <td>
        <?php
        include 'task' . $_SESSION['task'] . '.php';
        ?>
    </td>
</tr>
<tr><td>
	<p style="color:red;"><?=$error?></p>
</td></td>
<tr>
    <td>
        <a href="?restart=1">Restart game</a>
    </td>
</tr>
</table>

</body>
</html>
