#!/bin/bash

SESSION=OH16
DEF_DIR=/tmp
LINKS="links http://localhost:8080/"

cat > ~/.bashrc << "EOF"
if [ -f /etc/bashrc ]; then
    . /etc/bashrc
fi

export HISTFILESIZE=0
export PROMPT_COMMAND=__prompt_command
function __prompt_command() {
    PS1="[\$? \u@\h \W]\\\$ "
}
EOF

cd $DEF_DIR
tmux new-session -s "$SESSION" -n "Shell" -d 
tmux new-window -t "$SESSION:1" -n "Instructions" "$LINKS"
tmux select-window -t "$SESSION:1"
tmux -2 attach-session -t "$SESSION"
