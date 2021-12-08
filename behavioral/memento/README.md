# Memento
Memento describe way of saving object states and recover object to them later.

### Ingredients explanation
**Originator** - object which contains state that we want to save\
**Memento** - abstraction over all mementos in the system\
**ConcreteMemento** - implementation of Memento which stores Originator state\
**Caretaker** - object which controls flow, manages Originator states (create new state, load previous state)
