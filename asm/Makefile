all: encrypt decrypt

encrypt: encrypt.c
	gcc -std=c99 -o encrypt encrypt.c

wide_thought: wide_thought.asm
	nasm -g -felf64 wide_thought.asm && ld -o wide_thought wide_thought.o
