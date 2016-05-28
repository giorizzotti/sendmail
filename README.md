# Simplest Sendmail System

This repository includes a simple HTML form (with a CSS style), a javascript file and a PHP script. This system allows you to create a webpage with which an user can interact to send an email (thanks to the Sendmail Email server).

##Requirements:
* A working installation of PHP (>= 4.0);
* A working installation of Sendmail;

##How it works:
The **index.html** file contains just a simple HTML 5 form with the following fields:
* Name;
* Email;
* Subject;
* Message;

and, obviously, a submit button.

The repository also includes a **style.css** file, a Javascript file and a PHP file; all of them are imported in the **index.html** file.

When you press the **submit button** is called the **submit_id** function that will check for:
* A valid email address;
* A valid length for the message and the name;

The next step is to execut an **AJAX** script to send the request string to the PHP script.

###The PHP script:
It includes an escape function to enforce security for each of the four parameters.
Don't forget to change the **$emailTo** value with your desired recipient address.
The script will return **TRUE** if the email was sent or **FALSE** in case of errors. These values are used by the AJAX script to show a result message.

