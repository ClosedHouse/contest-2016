all: encrypt decrypt

encrypt: encrypt.c
	gcc -std=c99 -o encrypt encrypt.c

decrypt: decrypt.asm
	nasm -g -felf64 decrypt.asm && ld -o decrypt decrypt.o
