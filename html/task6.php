<?php
$hints = array(
"You should never forget the universal answer the Wide Thought has given to you... You never know where you can use it.",
"I don't know what to advise you now... :-(",
);
?>
<h1>Congratulations!</h2>

<p>You got there and took over the nasty AI machine! The world order is restored back again (well, at least a bit),
no machines should ever rule over humans...</p>

<h1>THE END.</h1>

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
