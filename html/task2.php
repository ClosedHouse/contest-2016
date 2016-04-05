<?php
$hints = array(
"You probably need to change the value of 'key' there in order to decrypt it.",
"With `make` you can build the thingie... OK, I know you know it.",
"The return code shows you how far you are from the answer...",
"Well, you get a return code of a process. And now.. maybe you should edit decrypt.asm file?",
"Substraction is way how to do it. Just do it!",
);
?>
<h1>Level 2</h2>
<p>Hmm, you successfully logged there and gained your first code. However, as neo, you cannot do so much with the
system. Feel free to log out of there, you don't want to compromise yourself in case your hacking fails.
You have to find out <strong>another way</strong> to become root there.<br/>Everyone wants to be root, that's an old unix truth.</p>

<p>
In the meanwhile you found a little assembly puzzle on your laptop. Try to play with it a bit,
maybe you can find some useful wisdom there... Always remember the codes and keys. You might need them later.
</p>

<p>
You can find your puzzle in directory:
<strong>~/contest-2016/task2</strong><br>

You should aim to decrypt.asm file. What happens here is not that important as a return code of the process.<br>Your shell is prepared for this situation so... don't hesitate and use this advantage!<br>
You can always compile this file by `make` command.
</p>
<p>Don't panic when you see some garbage on the screen. It will change as you will progress.</p>
<p>If your terminal shows only garbage after running the decrypt program, you can easily recover from that by typing `reset`.</p>

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
