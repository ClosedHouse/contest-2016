#!/bin/bash

SESSION=OH16
DEF_DIR=/tmp
LINKS="links http://localhost:8080/"

cd $DEF_DIR
tmux new-session -s "$SESSION" -n "Shell" -d 
tmux new-window -t "$SESSION:1" -n "Instructions" $LINKS
tmux select-window -t "$SESSION:1"
tmux -2 attach-session -t "$SESSION"
