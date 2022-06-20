## Factory Pattern

We have a PizzaStore. We can order pizza from there.
When we call the orderPizza method with type in it's argument,
the pizza store create the pizza and take necessary steps for making pizza.

When we need to add a VeggiePizza then orderPizza method needs to be refactored 
which breaks the open-closed principal of SOLID. Also the PizzaStore 
should not know how to make pizza. Here we can apply factory pattern 
for making pizza.

