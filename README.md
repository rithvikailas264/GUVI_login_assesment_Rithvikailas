# GUVI_login_assesment_Rithvikailas

## Software Requirement

1. VS code Editer or an equivalent Code Editor
2. XAMPP Server (Apache, PHP, MySQL)
3. MongoDB community edition and PHP_MONGODB.DLL
4. Composer for installing extension module such as mongo and predis

## Techstack

1. HTML, CSS
2. jQuery, JavaScript
3. AJAX
4. Redis
5. PHP
6. MySQL – Prepared Statement



### As per the Instruction I had created a folder with the html files on root and created a seperate CSS,JS,PHP folder

 ![image](https://user-images.githubusercontent.com/115399211/228188449-c029df2c-c77f-48a6-9fee-a44a710d9fad.png)




### To check and install the MongoDB and Redis files..move to the below location..and move to CMD..
![image](https://user-images.githubusercontent.com/115399211/228195044-2e4755a3-f282-4378-98f5-8b608a83225f.png)

### Type composer require mongodb/mongodb
![image](https://user-images.githubusercontent.com/115399211/228195855-956004d6-7714-49a4-912e-11e6882aab28.png)

### Type composer require predis/predis
![image](https://user-images.githubusercontent.com/115399211/228196072-c16f29f0-59ec-4f64-9aa1-c0c5ca8d8740.png)


### I have developed a index.html file which will have two redirecting buttons for login and signup.
![image](https://user-images.githubusercontent.com/115399211/228190250-44e1beac-d523-4d03-af94-9c222897ede5.png)
### The Signup page is used to store the user's information in the Databases.
![image](https://user-images.githubusercontent.com/115399211/228190515-7522f045-41ca-475a-8278-08ccd2ba74fd.png)
### Once the user registered successfully he will be directed to the Login page. And they can enter the registered email and password to see their profile.
![image](https://user-images.githubusercontent.com/115399211/228190682-04580f44-d41f-48a9-a9df-9a6695088c25.png)

### As per Instruction the login user data is stored in the Local Storage.
![image](https://user-images.githubusercontent.com/115399211/228191149-056d7346-2afc-4089-9b8d-4d95af32e47c.png)

### As we are using Redis to retrive recent data, we can check using the CMD.

![image](https://user-images.githubusercontent.com/115399211/228189197-d71c7616-0e2c-48bc-a9f1-13506e6bcfa5.png)



### As per the Instruction I have created a MongoDB database "guvidb" to store the Unstructured data. 
![image](https://user-images.githubusercontent.com/115399211/228188841-50bbe7cd-6230-40f2-a25f-1f6c2b9901b6.png)



### As per the Instruction I have created a MySQL database "guvidb" to store the structured data(email and password). 
![image](https://user-images.githubusercontent.com/115399211/228189077-c50aa76d-5fe5-4096-ad3e-e72b02a4dd0d.png)

