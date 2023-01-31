# hackers-poulette

## Welcome to this repository ! 
This repository is another project I realized for BeCode. I made it using OOPHP as well as SASS and javascript. The goal is to make a form to retrieve comments from user and allow the administrator to manage those comments. I still need to implement a mailing system to confirm that the comment has been received and deploy the website properly.

## Who am I ?

I'm a junior developer in training at BeCode, trying to get a good grip on php with projects and other things. I am currently in training at BeCode and do this as part of my training. 

## When ?

The project was started on January 30th 2023.

## How to use it ?

To use the forms, you will need a local server or a distant server. You can use the ```.env.example``` file to find the structure of the informations required to allow the form to work properly. You can either remove the .example part of create a new file named ```.env.``` It contains three fields :

    a server name
    a username
    a password
    a database name

These informations will be used when creating the connection to the database for the CRUD operations.

Once you clone this repository you will need to run ```composer install``` to install the required dependencies.

## Versions 

23-01-30 :

- basic form
- sanitization
- validation
- error handling & display
- styles
- comments status update
- comments deletion
- user login
- dashboard