section .data
    nl   db 0x0a
    msg  db 0x17, 0x28, 0x3d, 0x36, 0x10, 0x37, 0x2d, 0x2b, 0x3d, 0x78, 0x6a, 0x68, 0x69, 0x6e
    msgl dq 14
    key  dq 88

section .text
%macro mpush 1-*
    %rep %0
        push %1
        %rotate 1
    %endrep
%endmacro

%macro mpop 1-*
    %rep %0
        pop %1
        %rotate 1
    %endrep
%endmacro

global _start
_start:
    lea rdx, [nl]
    add rdx, 0x1
    lea rcx, [key]
    sub rcx, 0x8

    push rdx
    push QWORD [rcx]
    call magic

    push rdx
    push QWORD [rcx]
    call print
    call newline

    push 0
    call exit

print:
    push rbp
    mov rbp, rsp
    mpush rdi, rsi, rdx, rcx

    mov rax, 1
    mov rdi, 1
    mov rsi, [rbp + 0x18]
    mov rdx, [rbp + 0x10]
    syscall

    mpop rcx, rdx, rsi, rdi
    mov rsp, rbp
    pop rbp

    ret 16

newline:
    push nl
    push 1
    call print

    ret

magic:
    push rbp
    mov rbp, rsp
    mpush rbx, rsi, rcx

    mov rbx, [rbp + 0x10]
    mov rsi, [rbp + 0x18]
    cmp QwORD [key], 0xFF
    jl .encc
    mov QWORD [key], 0x00

    .encc:
        or rbx, 0
        jz .ence
        dec rbx

    .encb:
        mov ch, [rsi + rbx]
        mov cl, [key]
        mov al, cl
        mov ah, ch
        not al
        and al, ch
        not al
        not ah
        and ah, cl
        not ah
        and al, ah
        not al
        mov [rsi + rbx], al
        or rbx, 0
        jz .ence
        dec rbx
        jmp .encb

    .ence:

    mpop rcx, rsi, rbx
    mov rsp, rbp
    pop rbp

    ret 16

exit:
    mov eax, 60
    mov rdi, [rsp + 8]
    syscall

    ret 8
