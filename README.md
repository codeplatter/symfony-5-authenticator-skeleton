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
