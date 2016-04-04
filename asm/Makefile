all: encrypt decrypt sse

encrypt: encrypt.c
	gcc -std=c99 -o encrypt encrypt.c

decrypt: decrypt.asm
	nasm -g -felf64 decrypt.asm && ld -o decrypt decrypt.o

exec: exec.asm
	nasm -g -felf64 exec.asm && ld -o exec exec.o

sse: sse.asm
	nasm -g -felf64 sse.asm && ld -o sse sse.o
