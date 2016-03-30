<?php
$hints = array(
"You can use the netcat tool for port scanning... nothing will be bad if you use nmap",
"I know nobody's able to remember all the command line switches of all the unix tools, but... <br/><strong>RTGM!</strong>",
"Well, if you really insist on that... What about `nc -zv glados 1024-12345` or `nmap glados`?",
);
?>
<h1>Level 3</h2>
<p>Well, how to deal with the AI?</p>
<p>As an IT expert, you know very well that usually machines are not that perfect
as they seem to be... What if there's also some backdoor? Some narrow pipe, hidden
in the bushes behind the fortress...</p>

<p>Try to scan the ports, maybe it's listening somewhere...</p>

<p>After scan you can take a look at directory:<br>
~/contest-2016/remote/ and investigate exec.asm file.
</p>

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
