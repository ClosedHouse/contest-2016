<?php
$hints = array(
"`dmesg` can help you more.",
"`lsmod` and `grep` could help you with module listing.",
"Something can be hidden in module itself. Maybe you should take a look at /sys/module/MODULE_NAME/section and start your journey inside glados core. Look carefuuly. Maybe some files have 'special' names.",
"You are looking for particular section. Section is called: Block Started by Symbol.",
"You can find the addresses of module sections in /sys/module/MODULE_NAME/sections/*<br/>You could be interested in stack or data.",
"`cat /sys/module/MODULE_NAME/sectons/.bss` is what you need.",
"Running GDB against /usr/lib/debug/usr/lib/modules/3.10.0-327.10.1.el7.x86_64/vmlinux and /proc/kcore reveals the kernel space for you!",
"You should aim to examine parts of kernel memory by x functions.",
"You can try to run: `help x` in gdb console",
"By 'x/1s 0xGAINED_ADDRESS' you can examine what lies in memory. Use 'help x' in gdb for more info.",
);
?>
<h1>Level 5</h2>
<p>Cool! Now you have the full control over The glados machine! Well. Almost. To finish your strike,
you should break into its inner structures and understand its character a bit. I'll advise
you that its core part is loaded as a kernel module. Try to find the module, debug it a bit
and obtain the last piece of information you need.</p>
<p>
You should aim to find glados core module, look at memory layout of this module and then debug it with gdb.
</p>
<p>
This level can be little bit rought so don't hesitate and use hints. They are here for you brave hacker.
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
