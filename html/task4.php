<?php
$hints = array(
"You do not have to write the byte opcodes manually; if you compile an asm file, it would serve well.",
"I don't know what to advise you now... :-(",
);
?>
<h1>Level 4</h2>
<p>Cool, you found an interesting listening service there, that might be <strong>it</strong>!</p>

<p>You might try to send some byte-code there and see what happens. I don't need to remind you
that netcat can do all that for you...</p>

<p>FIXME here we need to give him the exec.asm or whatever... And pre-explain that the tea-leaves
on the desk are the contents of /etc/secrets</p>

<?php if(is_hint() && $hints.count() != 0): ?>

    <div class="hint">
        <?=show_hint()?>
    </div>

<?php endif; ?>
</p>


<form method="post">
    Answer: <input type="text" name="answer">
    <input type="submit" value="Submit">
</form>
