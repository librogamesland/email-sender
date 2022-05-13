#!/bin/bash

# Send massive emails using ssmtp

# sleep 2h

while read in; do bash -c 'cat text.txt | sudo ssmtp -v -F"Librogames Land" -f"prodocevano@librogame.net" '"$in"' >> out.log' || exit; done < emails.txt

date