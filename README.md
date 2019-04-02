Приложение состоит из 3 страниц: основная, страница добавления книги в каталог и страница редактирования информации о книге. Все, что связано с этими страницами и действиями на них имеет в сввоем составе слова main, add, edit соответственно.
Функции для работы с базой данных находятся в файле cataloge_model.php папки models. Код действий на каталогом находится в файлах с названиями controller[Name]Ajax в папке controllers. Код для формирование видов страниц находится в файлах с названиями controller[Name] папки controllers. Виды страниц расположены в папке views, шаблоны в директории views/templates.

Для запуска приложения необходимо иметь базу данных в СУБД MySQL, у меня она называется list. В базе данных должна быть создана таблица catalog с полями id, jenre, author, name, year. При наличии в базе данных указанной таблицы для запуска приложения остается отредактировать стандартный файл database.php в CodeIgniter.