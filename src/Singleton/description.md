# Singletone 
Singletone pattern is one of the simplest design pattern. It comes under creational pattern where an object is created only once.

This pattern involves a single class which is responsible to create an object while making sure that only single object gets created. This class provides a way to access its only object which can be accessed directly without need to instantiate the object of the class.

# Implementation

Here a class SingleObject and its constructor is private. It has an static instance of itself.

![ singletone ](singleton_pattern_uml_diagram.jpg)
<center>Fig. 1: Singletone pattern UML Diagram


