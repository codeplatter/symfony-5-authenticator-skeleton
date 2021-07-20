# Using symfony 5 authenticator for login and registration
This is a skeleton project showcasing new Authenticator based security.  Since support for Gaurd based authentication is deprecated since version 5.3 it is advised to move towards the new authenticator based security



Before you get started:
---

1. Update the .env file with your database credentials. In the project MySql is being used.

      ``` Example: DATABASE_URL="mysql://symfony:symfony123@localhost:3306/test"  ```
2. Update the schema by running the following commands.
    
    ``` php bin\console schema:update ```
      


Features
---


1) New User Registration

   During the registration process:

    1. New user is assigned ROLE_USER and ROLE_MEMBER roles
    2. Persist the User into the database
    3. To avoid having the user to login again :-
        1) Authenticate the User using the new authenticator ``` src\Security\CustomLoginAuthenticator ```
        2) Redirect the user to the member dashboard

2) Login

    During the Login process:

    1. ``` src\Security\SecurityController ``` handles the /login /logout
    2. Once the login form is submitted our custom security authenticator kicks-in. 
       It is located under ``` src\Security\CustomLoginAuthenticator ``` which is extended from ``` AbstractLoginFormAuthenticator ```
    3. OnAuthenticationSuccess in ``` src\Security\CustomLoginAuthenticator ``` the user is directed to member dashboard




Screenshots
---
Home page
---
![1](https://user-images.githubusercontent.com/87693251/126326888-671c353a-8cd2-42bd-8723-66f7178c73d6.png)

Registration page
---
![2](https://user-images.githubusercontent.com/87693251/126326900-5716fc63-84ac-4b55-939e-d0f038d48658.png)

Login page
---
![3](https://user-images.githubusercontent.com/87693251/126326895-51e3492d-c03d-40bf-b011-ff15b199bbba.png)

Member Dashboard page
---
![4](https://user-images.githubusercontent.com/87693251/126326897-692a80d0-6705-4dd2-8e86-c3e02ca79208.png)


