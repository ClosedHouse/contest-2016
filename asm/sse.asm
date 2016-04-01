bits 64

section .text
global _start

_start:
	; xores password
	mov rax, 0x0000000000000000
	push rax
	mov rax, 0x0000000000000000
	push rax
	movups xmm0, [rsp]
	
	; key
	mov rax, 0x0000000000000000
	push rax
	mov rax, 0x0000000000000000
	push rax
	movups xmm1, [rsp]

	xorps xmm1, xmm0

	movups [rsp], xmm1

	xor rax,rax
	inc ax

	; addres of string
	mov rsi, rsp

	; stdout
	xor rdi, rdi
	inc di

	; len
	xor rdx, rdx
	add dx, 16
	syscall

	; call exit syscall
	mov rax, 60
	xor rdi, rdi
	inc di
	inc di
	syscall

