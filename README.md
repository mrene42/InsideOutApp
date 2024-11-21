# Soulscript

Welcome to the Emotion Journal

[screenshot web]

Our project is about an emotion journaling company called “Soulscript” which is designed to help users record, express and reflect on their daily emotions and is visualized in the form of cards with characters from “InsideOut” to distinguish the emotion expressed such as; joy, sadness, anxiety, boredom, fear, anger, etc.


>[!CAUTION]
>Please read all the points of the README in order to make good use of the project. Thank you. 

## Installation Requirements

In order to run this project locally, you need:

1. XAMPP (or any other local server that supports PHP and MySQL)

2. A modern web browser

3. VSC Terminal

4. Composer

5. Node.js

6. xdebug

## Installation

1. Install my project with git clone

```bash
  git clone https://github.com/angiehelensanchez/InsideOutApp.git
```
2. Install composer:

```
composer install
``` 

3. Install NPM:

```
npm install
``` 
4. Create an .env by taking the example .env.example file and modify:

- DB_CONNECTION=mysql
- DB_DATABASE=soul_script

5. Create a database in MySQL
-  In the database manager “phpMyAdmin” create only the database with name “soul_script”.
- Generate the tables and the data of the tables:

```
php artisan migrate:fresh --seed
```

6. Run NPM

```
npm run dev
```

7. Run in another Laravel terminal:

```
php artisan serve
```
 
## Guide

In this quick guide you will learn about the main functionalities of our project "Soulscript":

1. On the main page you have information about the list of the diary of emotions

[Screenshot page]
[description] (puedes crear, editar, eliminar,etc..)
- Each card is a journal with a description of the emotion expressed with its respective InsideOut character and includes its date of registration.

- On each card there is a “Show” button that displays the selected journal in full screen on another page.

2. If you want to add a new diary, edit or delete you can do it from postman.

[Screenshot page]
[descrition]

### EndPoints
```
npm run dev
```

```
php artisan serve
```
From postman you can read, create, edit or delete a journal:

1. If you want to read all journals, you can do it with `GET`
[http://127.0.0.1:8000/api/]

2. If you want to read one specific journal, you can do it with `GET`
[http://127.0.0.1:8000/api/journals/{id}]

2. If you want to add a new journal, you can do it with `POST`.
[http://127.0.0.1:8000/api/journals]

3. If you want to edit an journal, you can do it  you can do it with `UPDATE`.
[http://127.0.0.1:8000/api/journals/{id}]

4. If you want to delete a journal, you can do it  you can do it with `DELETE`.
[http://127.0.0.1:8000/api/journals/{id}]


##  Execution of the tests
You can test our functions using ` php artisan test --coverage` in the terminal.
```
php artisan test
```
##  Diagrams made (BBDD)

## Project structure

The project follows the structure of the MVC design pattern, which allows for better separation of responsibilities and makes code maintenance easier.

- **Model:** Manages the application logic and connects to the database to interact with incident data.

- **View:** It is responsible for representing the data to the user, using HTML and CSS.

- **Controller:** Handles communication between the model and the view, processing user requests and sending appropriate responses.

### Tech
The project is developed using the following technologies:

<a href='#777BB4' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=FFFFFF&labelColor=8892be&color=8892be'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='#4479A1' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=00758f&color=00758f'/></a>
<a href='#FF2D20' target="_blank"><img alt='LARAVEL' src='https://img.shields.io/badge/LARAVEL-100000?style=for-the-badge&logo=LARAVEL&logoColor=white&labelColor=F05340&color=F05340'/></a>

### Tools

The tools used for this project are:

<a href='visual studio code' target="_blank"><img alt='VSC' src='https://img.shields.io/badge/VSC-100000?style=for-the-badge&logo=VSC&logoColor=white&labelColor=0277BD&color=0277BD'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/Git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=F05032&color=F05032'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub Pages' src='https://img.shields.io/badge/GitHub_Pages-100000?style=for-the-badge&logo=GitHub Pages&logoColor=white&labelColor=222222&color=222222'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='composer' src='https://img.shields.io/badge/composer-100000?style=for-the-badge&logo=composer&logoColor=white&labelColor=8f6447&color=8f6447'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='node.js' src='https://img.shields.io/badge/Node.js-100000?style=for-the-badge&logo=node.js&logoColor=white&labelColor=82cc27&color=82cc27'/></a>

## Autor

- [@Angie](https://github.com/angiehelensanchez)
- [@Ariana](https://github.com/ArianaMartinMartinez)
- [@Jaz](https://github.com/Jaz356)
- [@Alberto](https://github.com/TOKIO-V2)
- [@René](https://github.com/mrene42)

>[!NOTE]
>Our team is learning.