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

    for($i = 0; $i <= $_SESSION['hint'][$_SESSION['task']]; $i++)
    {
        if(!$hints[$i]) break;
        echo '<strong>Hint #'.($i+1).'</strong><br>';
        echo $hints[$i].'<br>';
    }
}

function is_hint()
{
    return is_numeric($_SESSION['hint'][$_SESSION['task']]) ? TRUE : FALSE;
}

if(!is_numeric($_SESSION['task'])) $_SESSION['task'] = 1;

// Answers:
$answers = array(
    1 => "OH16_B00B15",
    2 => "OH16_011110",
    3 => "OH16_00DEAD",
    3 => "OH16_424242",
);

if($_POST)
{
    if($answers[$_SESSION['task']] == $_POST['answer'])
    {
        $_SESSION['task']++;
    }
    elseif($_POST['answer'] != 'hint')
    {
        $_SESSION['error'] = "WRONG ANSWER";
    }
    elseif($_POST['answer'] == 'hint')
    {
        if(!is_numeric($_SESSION['hint'][$_SESSION['task']]))
        {
            $_SESSION['hint'][$_SESSION['task']] = 0;
        }
        else
        {
            $_SESSION['hint'][$_SESSION['task']]++;
        }
    }

    # Workarounds for caching. Thank you links!
    $hash = md5(time().mt_rand(0, 100));
    header("Location: ?cache=$hash");
    exit();
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
<tr><td>
	<p style="color:red;"><?=$error?></p>
</td></tr>
<tr>
    <td>
        <?php
        include 'task' . $_SESSION['task'] . '.php';
        ?>
    </td>
</tr>
<tr><td>
	<p style="color:red;"><?=$_SESSION['error']?></p>
</td></tr>
<tr>
    <td>
        <a href="?restart=1">Restart game</a>
    </td>
</tr>
</table>

</body>
</html>
<?php
$_SESSION['error'] = '';
?>
