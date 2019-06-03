#!/usr/bin/env python3.5
# -*- coding: utf-8 -*-

import argparse
import smtplib
from email.mime.text import MIMEText
from email.header import Header

parser = argparse.ArgumentParser()

parser.add_argument("-name", type=str, default='None')
parser.add_argument("-phone", type=str, default='None')

args = parser.parse_args()

gmail_user = "***@gmail.com"
gmail_password = "***@gmail.com"
FROM = '***@gmail.com'
TO = ['***@gmail.com']
SUBJECT = "Заявка с формы pifagor.com"

TEXT = "Имя: " + args.name + "\r\nНомер: " + args.phone

msg = MIMEText(TEXT, 'utf-8')
msg['Subject'] = Header(SUBJECT, 'utf-8')
msg['From'] = FROM
msg['To'] = ", ".join(TO)

try:
    server = smtplib.SMTP("smtp.gmail.com", 587, timeout=10)
    server.ehlo()
    server.starttls()
    server.login(gmail_user, gmail_password)
    server.sendmail(msg['From'], TO, msg.as_string())
    server.quit()
    print('Успешно отправлено письмо')
except Exception as ex:
    print("Не удалось отправить письмо\n", ex)
