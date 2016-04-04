<?php
$hints = array(
"The code used for encryption is 42.",
"I don't know what I can advise to you now... :-(",
"What about printf?",
"`printf "%x\n" 42`",
);
?>
<h1>Level 4</h2>
<p>Great! You have obtained the contents of the /secrets file (did you looked what exec.asm really do?).
Damn! You gained code but another message is encrypted! Again!</p>

<p>Do you remember code used for encryption from level 2? You will need it here.</p>

<p>You can find utils for this level in <strong>~/contest-2016/task4</strong> directory<br>
<p>You should aim to sse.asm file which use powerful SSE instructions of your CPU and can decrypt message very fast</p>
<p>Don't forget to edit the necessary data in it! Who knows what's encrypted there, it might be even the root password
of the glados machine and more...</p>

<p>
As usual, you can use `make` command for compilation in right directory.
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
