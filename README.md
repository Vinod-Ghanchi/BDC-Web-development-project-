# Blood Donation Center


This is our Sem-4 Relational Database Management System and Web Programming Mini Project. 
We have made a website that tries to emulate a blood donation center.
The frontend is made with HTML, CSS, and Bootstrap
The backend is made with Apache, MySql, and php.

The website has a home page that has a navigation bar that leads the user to other webpages such as a registration link and the webpage to the information of nurses and volunteers. It also has in-page links to a 'Learn More' section that has information about blood donating and a 'Contact Us' page that has links to our socials.

The Donate link leads to a webpage that has a registration form that simulates a blood donation signup form. After filling the form, the information gets updated and added to the mysql database.

The Nurses and Volunteer links lead to a webpage displaying a table showing the information about all the registered nurses and volunteers respectively. These tables are in-built in the mysql database and are directly displayed from the database to the webpage.

The Certificate link leads to a form asking for the Name and other details. This form has form-validation to the name section. The certificate is created only if the entered name is present in the registered donors database. The generated certificate also has an auto-generated timestamp of the day when the certificate was requested.

# Home page (index.php)
![Web capture_4-5-2022_211334_localhost](https://user-images.githubusercontent.com/80514865/179672702-8629ddd8-866e-4e57-b4a4-838a4c29d1b6.jpeg)

#Donor entry form
![Web capture_4-5-2022_211351_localhost](https://user-images.githubusercontent.com/80514865/179672806-e96705bb-14a4-4051-8768-7b3be175db57.jpeg)

#Showing nurse details on website 
![Web capture_4-5-2022_211411_localhost](https://user-images.githubusercontent.com/80514865/179672885-d32d2405-3de6-4999-bc1d-05e3a48bfd04.jpeg)

#Showing volunteers details on website
![Web capture_4-5-2022_211423_localhost](https://user-images.githubusercontent.com/80514865/179672980-0444f502-128b-4455-83ec-a260585b0b2d.jpeg)

#Certificate generating page
![Web capture_4-5-2022_211524_localhost](https://user-images.githubusercontent.com/80514865/179673035-08f2147c-3280-4204-9175-c541a2b79f53.jpeg)

#screenshot of generated certificate after finding the name from database
![Vinod](https://user-images.githubusercontent.com/80514865/179673103-25e44e6e-85df-49c1-b653-c375d04c7de8.jpg)

#phpMyAdmin screenshots of our database
![Annotation 2022-05-04 230029](https://user-images.githubusercontent.com/80514865/179673236-814fee23-e19e-4f5b-91ee-14e3b24635db.jpg)
![Annotation 2022-05-04 230018](https://user-images.githubusercontent.com/80514865/179673246-f7c0f5c3-d834-45d6-9336-5494581d0566.jpg)
![Annotation 2022-05-04 230010](https://user-images.githubusercontent.com/80514865/179673264-1a140b05-dc04-4c2d-95ab-10642ea94170.jpg)
![Annotation 2022-05-04 230001](https://user-images.githubusercontent.com/80514865/179673271-4614c9dc-5962-4cc6-ae09-51b6664cc50f.jpg)
![Annotation 2022-05-04 225930](https://user-images.githubusercontent.com/80514865/179673405-32144750-5f37-459d-b5a4-542369cc055b.jpg)



