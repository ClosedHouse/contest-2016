<?php
$hints = array(
"`lsmod` and `grep` could help you with module listing",
"You can find the addresses of module sections in /sys/module/<modulename>/sections/*<br/>You could be interested in stack or data.",
"Running GDB against /usr/lib/debug/usr/lib/modules/3.10.0-327.10.1.el7.x86_64/vmlinux and /proc/kcore reveals the kernel space for you!",
"By 'x/1s 0xfff4123456789012' you can examine what lies in memory. Use 'help x' in gdb for more info.",
);
?>
<h1>Level 5</h2>
<p>Cool! Now you have the full control over The AI machine! However, to finish your strike,
you should break into its inner structures and understand its character a bit. I'll advise
you that its core part is loaded as a kernel module. Try to find the module, debug it a bit
and obtain the last piece of information you need.

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
