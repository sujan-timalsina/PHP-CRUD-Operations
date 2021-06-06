<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>

<body>
    <?php
    /**
MVC Model View Controller
An Architectural pattern that separates an application into three main logical components Model, View and Controller.
Each of the components has their own role in project.
Introduced in 1987 by Smalltalk programming language
More than 80% of all web app frameworks rely on the Model View Controller architecture.

Model:::responsible for getting data from database, packaging it in data objects that can understand by other components, and delivering those objects, most of which will happen in response to input from the controller.

View:::represents how data should be presented to the application user. User can read or write the data from view.
Basically it is responsible for showing end user content, we can say it may consists of HTML, CSS, JS.

Controller:::The user can send request by interacting with view, the controller handles these requests and sends to Model then get appropriate response from Model, sends response to View.
It may also have required logics. 
It works as a mediator between View and Model.

View and Model can't communicate directly, so Controller plays a role here.

For example in resturants customers communicate with waiter to order food not with the cook directly.
Here customer/food(only that are ordered):view
waiter:controller
cook:modal
     **/
    ?>
</body>

</html>