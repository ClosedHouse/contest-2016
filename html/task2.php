<?php
$hints = array(
"You probably need to change the value of 'key' there in order to decrypt it.",
"With `make` you can build the thingie... OK, I know you know it.",
"The return value shows you how far you are from the answer...",
"Well, you get a return value of a process by running `echo \$?` right after the process finishes.",
);
?>
<h1>Level 2</h2>
<p>Hmm, you successfully logged there and gained your first code. However, as neo, you cannot do so much with the
system. You have to find out a way to become root there. Everyone wants to be root, that's
an old unix truth.</p>

<p>
In the meanwhile you found a little assembly puzzle on your laptop. Try to play with it a bit,
maybe you can find some useful wisdom there...
</p>

<p>
You can find your puzzle in directory:
<strong>~/contest-2016/asm</strong><br>

You should aim to decrypt.asm file however, encrypt.c file should help you a lot.
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
