<?php
$hints = array(
);
?>
<h1>Congratulations!</h2>

<p>You got there and took over the nasty AI machine! The world order is restored back again (well, at least a bit),
no machines should ever rule over humans...</p>

<h1>THE END.</h1>

<p>If you enjoyed this game, please rate us in the survey!</p>

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
