Для человека из чёрной команде нужно создать класс для Магазина Пиццерии(PizzaStore). 

В PizzaStore нужно реализовать функцию orderPizza($type)

В PizzaStore создать функцию createPizza($type), данную функцию следует использовать в функции orderPizza.
Функция createPizza должна возвращать пиццу в зависимости от типа который ей передаётся.
В orderPizza использовать функцию createPizza для создания пиццы и вызвать у данной пиццы методы prepare и cut.
Также нужно создать класс для Пиццы(Pizza), в котором будут поля name, sauce, и массив toppings(строковой элемент). В классе пиццы реализовать метод prepare, который будет выводить данный текст:

“ Началась готовка пиццы {название пиццы}”
“Добавлен соус {название соуса}”
“Добавлены топики: {название всех топиков}”

Также в этом классе реализовать функции cut которая будет выводить строку как нарезать пиццу в классе будем выводить, что пиццу нужно резать по диагонали:

“Данную пиццу нарезают по диагонали”

