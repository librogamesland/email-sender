
Send massive mails using ssmtp

# Step 1 - Retrieve email list

From the directadmin database control panel, create a new temporaly user called `librogame_test` with password `MYPASSWORD`

Put the `show_mails.php` file in the private_html dir of `directadmin.librogame.net`

Open <librogame.net/show_mails.php>

Copy and paste the results on the emails.txt file

REMOVE THE `@librogame.net` emails from the list.

Clean everything.

# Step 2 - Install ssmtp and send mails
Change the ssmtp credentials with:
```bash
sudo nano /etc/ssmtp/ssmtp.conf
```


CHANGE PASSWORD WITH THE ONE OF PRODO!!!
```bash
#
# Config file for sSMTP sendmail
#
# The person who gets all mail for userids < 1000
# Make this empty to disable rewriting.
root=prodocevano@librogame.net

# The place where the mail goes. The actual machine name is required no 
# MX records are consulted. Commonly mailhosts are named mail.domain.com
mailhub=mail.librogame.net:587

# Where will the mail seem to come from?
#rewriteDomain=

# The full hostname
hostname=luca-fabbian-pc

# Are users allowed to set their own From: address?
# YES - Allow the user to specify their own From: address
# NO - Use the system generated From: address
FromLineOverride=YES

AuthUser=prodocevano@librogame.net
AuthPass=CHANGE PASSWORD WITH THE ONE OF PRODO!!!

UseTsl=No
UseTSL=No
UseTSL=NO
```

Then run the `sendmail.sh` script.