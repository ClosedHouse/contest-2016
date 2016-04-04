all: decrypt

decrypt: decrypt.asm
	nasm -g -felf64 decrypt.asm && ld -o decrypt decrypt.o
