
## About Bytebank

This is just a demo app for me to experiment with convenient abstractions and use-cases of event sourcing and event stream projection.

In this context the namespace `\Nibble` represents the event-source storage and projection library, but for the sake of more rapid prototyping, this mono repo will contain both it and the demo app.

The namespace `\Bytebank` references the fictional banking app that will use `\Nibble`

Current Stack
 - Framework Base - Laravel 12
 - ORM Base - Eloquent
 - Event Storage Engine - MySQL
 - Projection Storage Engine - SQLite

## @ToDO

Currently as this only exists with the barest of bare minimum scopes, the list of @todo's is too big to be worth noting

## Philosophy

This scratchpad will let me explore and artificially scale up event sourcing with the goal being to ***ignore potential or theoretical issues until they become real issues***. 

The hope is that by taking a pragmatic approach to seeking benefits without concern for the consequences, I can make useful progress faster and learn more about the use of event sourcing while tangibly creating actual failure cases that can serve as test cases for future refactors and revisions.
