<?php

// the create statement
// this staement will create a table called persons
// it will have the parameters id and name
// the parameter types are defined as an integer and text (data type)
CREATE TABLE person (id int, name text);
// in php this will be wrapped in brackets and the query is assigned a variable
// $db is our database connection variable. see connecting to databases
$person = $db->query('CREATE TABLE person (id int, name text');

// INSERT
$id = "";
$name = "";
// prepare INSERT
$newPerson = $db->prepare('INSERT INTO person (id, name) VALUES (:id, :name)');
// Execute INSERT
$newPerson->execute(['id' => $id, 'name' => $name]);

// UPDATE
// prepare UPDATE. find the id and update the name
$updatePerson = $db->prepare('UPDATE person SET name = :name WHERE id = :id');
// Execute UPDATE
$updatePerson->execute(['id' => $id, 'name' => $name]);

// DELETE the book with this id from the database
$id = 1;
// Prepare DELETE statement
$deletePerson = $db->prepare('DELETE FROM books WHERE id = :id');
// Execute DELETE
$deletePerson->execute(['id' => $id]);

// ALTER TABLE allows us to modify the table
// ADD COLUMN using a prepared statement
$addColumn = $db->prepare('ALTER TABLE persons ADD COLUMN :age INT');
$age = "age"; // if this was from a form we would use a $_post or get e.g. $age = $_POST['age'];
$addColumn->bindParam(':age', $age);
$addColumn->execute(); // we can combine these two statements, bind & execute as above. we can
// use the array() notation as well as the [] notation for the array
// e.g. $->execute(array(':age' => $age));

// SEE ALSO SQL INJECTION.PHP
// * is a WILDCARD
// * is everything
// Review
//Congratulations! We’ve learned six commands commonly used to manage data stored in a relational database and how to set constraints on such data. What can we generalize so far?
//
//SQL is a programming language designed to manipulate and manage data stored in relational databases.
//
//A relational database is a database that organizes information into one or more tables.
//A table is a collection of data organized into rows and columns.
//A statement is a string of characters that the database recognizes as a valid command.
//
//CREATE TABLE creates a new table.
//INSERT INTO adds a new row to a table.
//SELECT queries data from a table.
//ALTER TABLE changes an existing table.
//UPDATE edits a row in a table.
//DELETE FROM deletes rows from a table.