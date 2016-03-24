<?php
$hints = array(
"You should never forget the universal answer the Wide Thought has given to you... You never know where you can use it.",
"I don't know what to advise you now... :-(",
);
?>
<h1>Level 5</h2>
<p>Great! You have obtained the contents of the /etc/secrets file! Damn, it's encrypted again...</p>

<p>Let's use the shining power of the AI machine itself for decrypting it! Rather than torturing
your laptop's power efficient CPU...</p>

<p>Use the sse.asm file and try to force the AI machine to solve the problem for you. Don't forget
to edit the necessary data in it! Who knows what's encrypted there, it might be even the root password
of the machine...</p>

<p>FIXME the sse.asm here</p>

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
