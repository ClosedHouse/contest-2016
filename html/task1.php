<?php
$hints = array(
"Need a hint? Well, hope nobody sees that... ;-)<br/>Your password to that machine was 'rabbit'."
);
?>
<h1>Level 1</h1>
<p>
"Look at you, hacker: a pathetic creature of meat and bone, panting and sweating as you run through my corridors. How can you challenge a perfect, immortal machine?"
</p>
<p>
Welcome hacker! You were challanged by Glados which prepared some obstacles to you.
You have to fight Glados, pass some tests and prove that you are better than its AI.
In order to gain control over <em>it</em>, you have to get an access to all its knowledge.
</p>

<h2>How to beat this game?</h2>
<p>
Game consists of several levels. In each level, you need to get an access code to the next level. The level codes are in a format like "OH16_234567".
Make sure you won't miss any of the level codes, but also keep all the other information carefully, since it might be useful later.<br/>

Put the codes into <strong>Code</strong> field below. You also use <strong>hint</strong> as a code, if you need some help.
</p>
<p>Except of this window you have another one accessible via TMUX. On the local filesystem, there are some source codes you might need.</p>
<p>
First of all, you need to connect to Glados and see what we can do... <br/>
Switch terminal and type: <br/>
<code>
$ ssh neo@glados
</code>
...and follow the white <em>rabbit</em>...
</p>
<hr>
<p>

<?php if(is_hint()): ?>

    <div class="hint">
        <?=show_hint()?>
    </div>

<?php endif; ?>
</p>

<form method="post">
    Code: <input type="text" name="answer">
    <input type="submit" value="Submit">
</form>
