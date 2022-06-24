
## Builder
When making an instance of a class depends on many parameters 
we often pass them through constructor which pollutes the constructor.Also if 
we need to add more parameters in future then it becomes difficult to manange 
the constructor. This is called telescope anti-pattern.

Using the builder class we can make that object and without polluting the 
constructor of the object class.Its a creational design pattern.