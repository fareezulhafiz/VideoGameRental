We are creating a simple CRUD system with Eloquent relationships for a video game rental system involves setting up three tables: users (customers), games, and rentals. We have the following relationships:

A User can rent multiple Games.
A Game can be rented by multiple Users.
The Rental table will handle the many-to-many relationship between User and Game.
