<?php
$hints = array(
	"Maybe you found nothing. What if backdoor is open on port higher than 1024?",
	"You should look for `port ranges` string in nmap man page.<br>I know that range from 1-65535 is too large to scan. What about to start with 12245-12345 .",
	"`nmap -p 12245-12345 glados`",
	"You can use `nc` command for feeding remote machine with backdoor bytecode.",
	"`cat exec | nc glados 12345`",
);
?>
<h1>Level 3</h2>
<p>Good. You are in next level!</p>
<p>Do you remember the magic number which was used as encryption code in the previous level? You should save this number for later use.</p>
<p>Well, how to deal with another Glados' challenge?</p>
<p>As an IT expert, you know very well that machines are usually not that perfect
as they seem to be... What if there's also some backdoor? Some narrow pipe, hidden
in the bushes behind the fortress...</p>

<p>You vaguely remember once there was a famous backdoor that was executing bytecode
received from an open network port. What if Glados suffers from it too? Anyway, a port
scan is always a good point to start.</p>

<p>Nmap is installed on your machine. You can use it.</p>

<p>After scan you may have a look at directory:<br>
~/contest-2016/task3/ and investigate the exec.asm file.
File contains remote exploit which will reveal some secrets to you.
You must compile this file and send it to the port you found.<br>
If you are really curios hacker, you could take a look at exec.asm file content.
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
