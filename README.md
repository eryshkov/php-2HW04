#  Home work 4

<div align = "center">
<img src="/screens/hw04.png" width="100%">  
<br>
</div>

<p align="center">
<img src="https://img.shields.io/badge/PHP-7.2-orange.svg" alt="PHP-7.2"/>
<img src="https://img.shields.io/badge/licence-MIT-lightgray.svg" alt="Licence MIT"/>
</p>

## Информация для проверяющего
* дамп БД в папке `db_dump`
* решение задачи номер 2 и 3 находится [здесь](https://github.com/eryshkov/php-2HW04/tree/task_two)
* решено не делать отдельную точку входа для админ панели по причине того, что и без неё все работает
* для решения задачи 5 и реализации ЧПУ был создан сервис `Router`, умеющий определять класс контроллера и передаваемые ему параметры по тексту ЧПУ-ссылке
* список соответствий шаблон **ЧПУ => имя контроллера** задается в файле [config.php](/config.php)
* для решения задачи 5 была применена дополнительная настройка web-сервера nginx:
 <img src="/screens/nginx.png" width="50%"> 

## Main functionality
* Controller & Front Controller
* MVC pattern
* Active Record pattern
* uses MySQL database
* classes and objects


## Credits
* thanks to **Albert Stepantsev** and to his [awesome school](https://pr-of-it.ru/courses/php-2.html)

## License

This project is licensed under the MIT License.