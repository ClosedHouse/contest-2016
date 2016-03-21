<?php
$hints = array(
);
?>
<h1>Level 1</h1>
<p>
"Look at you, hacker: a pathetic creature of meat and bone, panting and sweating as you run through my corridors. How can you challenge a perfect, immortal machine?"
</p>
<p>
Welcome hacker! You were challanged by AI which prepared some obstickles to you.
You must pass some tests and prove that you are better than AI.
</p>

<h2>How to beat this game?</h2>
<p>
Game consists of several levels. In each level you can get an access code to a next level. The codes are in the format like "OH15_234567".
Look for codes carefully. They are way how to beat AI and gain prices.<br>

Write codes to <strong>Code</strong> field below. You also use <strong>hint</strong> as a code which reveal some help.
</p>
<p>
First of all, you need to connect to AI server. Switch terminal and type: <br>
<code>
$ ssh root@aicore
</code>
<p>
<?php if(is_hint() && $hints.count() != 0): ?>

    <div class"hint">
        <?=show_hint()?>
    </div>

<?php endif; ?>
</p>

<form method="post">
    Code: <input type="text" name="answer">
    <input type="submit" value="Submit">
</form>
