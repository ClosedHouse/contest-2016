<?php
$hints = array(
"Do you really need hints in the first level? Okey, hope nobody sees that... <br/>Your old password to that machine was 'rabbit'."
);
?>
<h1>Level 1</h1>
<p>
"Look at you, hacker: a pathetic creature of meat and bone, panting and sweating as you run through my corridors. How can you challenge a perfect, immortal machine?"
</p>
<p>
Welcome hacker! You were challanged by an AI which prepared some obstickles to you.
You must pass some tests and prove that you are better than the AI. In order to gain
control over <em>it</em>, you have to get access to its main database which contains all its
knowledge.
</p>

<h2>How to beat this game?</h2>
<p>
Game consists of several levels. In each level, you need to get an access code to the next level. The codes are in a format like "OH16_234567".
Look for codes carefully.<br/>

Put the codes into <strong>Code</strong> field below. You also use <strong>hint</strong> as a code, if you need some help.
</p>
<p>
First of all, you need to connect to AI server and see what we can do...
Try to search for /etc/secrects file.</p>
<br/>Switch terminal and type: <br/>
<code>
$ ssh neo@glados
</code>
...and follow the white <em>rabbit</em>...
</p>
<hr>
<p>

<?php if(is_hint() && $hints.count() != 0): ?>

    <div class="hint">
        <?=show_hint()?>
    </div>

<?php endif; ?>
</p>

<form method="post">
    Code: <input type="text" name="answer">
    <input type="submit" value="Submit">
</form>
