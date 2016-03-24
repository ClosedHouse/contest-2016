<?php
$hints = array(
"You can use the netcat tool for port scanning...",
"I know nobody's able to remember all the command line switches of all the unix tools, but... <br/><strong>RTFM!</strong>",
"Well, if you really insist on that... What about `nc -zv hostname 1-1024`?",
);
?>
<h1>Level 3</h2>
<p>Well, how to deal with the AI?</p>
<p>As an IT expert, you know very well that usually machines are not that perfect
as they seem to be... What if there's also some backdoor? Some narrow pipe, hidden
in the bushes behind the fortress...</p>

<p>Try to scan the ports, maybe it's listening somewhere...</p>

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
