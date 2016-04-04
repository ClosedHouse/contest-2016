<?php
$hints = array(
"You can use the netcat (nc) tool for port scanning... nothing will be bad if you use nmap.",
"I know nobody's able to remember all the command line switches of all the unix tools, but... <br/><strong>RTFM!</strong> ;-)",
"Well, if you really insist on that... What about `nc -zv glados 1024-12345` or `nmap glados`?",
"You can use netcat for feeding remote network services with some stuff.",
"You do not have to type the byte opcodes to netcat manually; if you compile an asm file, it would serve well.",
);
?>
<h1>Level 3</h2>
<p>Well, how to deal with Glados' challenge?</p>
<p>As an IT expert, you know very well that usually machines are not that perfect
as they seem to be... What if there's also some backdoor? Some narrow pipe, hidden
in the bushes behind the fortress...</p>

<p>You vaguely remember once there was a famous backdoor that was executing bytecode
received from an open network port. What if Glados suffers from it too? Anyway, a port
scan is always a good point to start.</p>

<p>After scan you may have a look at directory:<br>
~/contest-2016/asm/ and investigate the exec.asm file.
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
