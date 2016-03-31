#include <linux/module.h>	/* Needed by all modules */
#include <linux/kernel.h>	/* Needed for KERN_INFO */
#include <linux/init.h>		/* Needed for the macros */
#include <linux/timer.h>

static void ai_core_periodic(unsigned long not_used);
static void ai_core_weak_point(void);


static struct timer_list ai_core_periodic_val;
static char buffer[32];
static int __init ai_core_init(void)
{
	printk(KERN_NOTICE "AI GlaDOS module started successfully.");

	init_timer(&ai_core_periodic_val);
	ai_core_periodic_val.expires = jiffies + 10000;
	ai_core_periodic_val.function = ai_core_periodic;
	ai_core_periodic_val.data = 0;
	add_timer(&ai_core_periodic_val);

	return 0;
}

static void ai_core_periodic(unsigned long not_used)
{
	ai_core_weak_point();

	del_timer(&ai_core_periodic_val);
	init_timer(&ai_core_periodic_val);

	ai_core_periodic_val.expires = jiffies + 10000;
	ai_core_periodic_val.function = ai_core_periodic;
	ai_core_periodic_val.data = 0;
	add_timer(&ai_core_periodic_val);

}

static void ai_core_weak_point(void)
{
	char tmp_buf[32];

	tmp_buf[0] = 'O';
	tmp_buf[1] = 'H';
	tmp_buf[2] = '1';
	tmp_buf[3] = '6';
	tmp_buf[4] = '_';
	tmp_buf[5] = '4';
	tmp_buf[6] = '2';
	tmp_buf[7] = '4';
	tmp_buf[8] = '2';
	tmp_buf[9] = '4';
	tmp_buf[10] = '2';
	tmp_buf[11] = '\0';
	strcpy(buffer, tmp_buf);
}

MODULE_LICENSE("GPL");

module_init(ai_core_init);
//module_exit(madvise_swap_exit);
