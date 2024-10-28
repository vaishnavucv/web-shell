# web-shell
A php page that we can pass linux shell code and get output in the webpage itself 

To use this code, git clone to directory of your web server. 
```
git clone https://github.com/vaishnavucv/web-shell
cd web-shell
sudo php -S localhost:8080
```
Then, open your web browser and navigate to 
```
http://localhost/index.php
```
To view the page. Enter any command you want in the text input field, and
a loading spinner will be displayed while the command is being executed, and the output will be displayed once it is ready.
