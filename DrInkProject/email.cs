
//Not made for final code
using System;
using System.Net.Mail;

if(firstname == null || lastname == null || email == null)
{
    //commit arson
}
else
{
    MailMessage email = new MailMessage();
    SmtpClient client = new SmtpClient(riley.cramer10@gmail.com);

    email.From = new MailAddress("snickers31415@gmail.com", "Brandon Twitty");
    email.Subject = $"{firstname} {lastname} \n Contact Me at: {email}";
    client.Send(email);
}
