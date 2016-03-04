<?php
$hints = array(
    'Prvy hint',
    'Druhy hint',
    'Treti hint',
);
?>
<strong>Task 1</strong>
<br>

This is first task bla bla bla..

<?php if(is_hint()): ?>

    <div class"hint">
        <?=show_hint()?>
    </div>

<?php endif; ?>

<br><br>
<pre>
lol=foo
if [ $lol = "foo" ]
then
    echo kek
fi
</pre>

<br><br>

<form method="post">
    Answer: <input type="text" name="answer">
    <input type="submit" value="Submit">
</form>
