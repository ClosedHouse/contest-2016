<?php
$hints = array(
"The code used for encryption is 42.",
"I don't know what I can advise to you now... :-(",
);
?>
<h1>Level 4</h2>
<p>Great! You have obtained the contents of the /secrets file (did you looked what exec.asm really do?).
Damn! You gained code but another message is encrypted! Again!</p>

<p>Do you remember code used for encryption from level 2?</p>

<p>Use the sse.asm file and try to force the AI machine to solve the problem for you. Don't forget
to edit the necessary data in it! Who knows what's encrypted there, it might be even the root password
of the glados machine and more...</p>

<p>
Craft the sse.asm file to make it decrypt the encrypted content and send it to the AI machine.
You find it again in <strong>~/contest-2016/task4</strong><br>
</p>

<?php if(is_hint()): ?>

    <div class="hint">
        <?=show_hint()?>
    </div>

<?php endif; ?>
</p>


<form method="post">
    Answer: <input type="text" name="answer">
    <input type="submit" value="Submit">
</form>
