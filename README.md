# Blood Donation Center


This is our Sem-4 Relational Database Management System and Web Programming Mini Project. 
We have made a website that tries to emulate a blood donation center.
The frontend is made with HTML, CSS, and Bootstrap
The backend is made with Apache, MySql, and php.

The website has a home page that has a navigation bar that leads the user to other webpages such as a registration link and the webpage to the information of nurses and volunteers. It also has in-page links to a 'Learn More' section that has information about blood donating and a 'Contact Us' page that has links to our socials.

The Donate link leads to a webpage that has a registration form that simulates a blood donation signup form. After filling the form, the information gets updated and added to the mysql database.

The Nurses and Volunteer links lead to a webpage displaying a table showing the information about all the registered nurses and volunteers respectively. These tables are in-built in the mysql database and are directly displayed from the database to the webpage.

The Certificate link leads to a form asking for the Name and other details. This form has form-validation to the name section. The certificate is created only if the entered name is present in the registered donors database. The generated certificate also has an auto-generated timestamp of the day when the certificate was requested.





