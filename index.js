/**************************************
*       Javascripts Basics           *
/*************************************/

// Prompt command is used to "prompt" a question, through a pop-up box in the browser 
var visitor = prompt('What is your name');

// "+" signs are used to combined strings or words. This is called Concatenation.
var message = 'Hello' + visitor + ". Welcome to Treehouse." + "We are so glad that you came to visit, " + ". Please come again, when you want to learn some more.";

// Document.write prints message to the screen
document.write(message);

// Creating Random Numbers

var dieRoll = Math.floor(Math.random() * 6 ) + 1;

alert(dieRoll);