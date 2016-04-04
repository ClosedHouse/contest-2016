<?php
$hints = array(
"Do you really need hints in the first level? Okey, hope nobody sees that... <br/>Your old password to that machine was 'rabbit'."
);
?>
<h1>Level 2</h2>
<p>This is second task, bla bla bla</p>


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
