# test_for_ameton
**Тестовое задание от компании Ameton**

Нужно разработать систему комментариев новостей с возможностью отображать ответы на комментарии без ограничения уровня вложенности. 

Зарегистрировать любой бесплатный хостинг, например таймвеб. Поднять битрикс любую редакцию, какую посчитаете нужной. Где и как хранить комментарии - на ваше усмотрение, но не использовать форумы.

Поля комментария:
дата
имя
комментарий

Сами новости можно не делать. Будет достаточно передавать ИД новости в урле.

Форму для написания комментария делать не нужно.

Представим, что у нас есть 5 новостей (ИД 1, 2, 3, 4, 5). 

Для первой новости сгенерировать 100 комментариев.
Для второй новости сгенерировать 5000 комментариев.
Для третьей новости сгенерировать 10000 комментариев.
Для четвертой новости сгенерировать 50000 комментариев.
Для пятой новости сгенерировать 100000 комментариев.

При генерации комментариев предусмотреть, чтобы были ответы на комментарии вплоть до 10-го уровня вложенности.

Итого должно получиться 5 ссылок: 
http://site.ru/news/1/
http://site.ru/news/2/
http://site.ru/news/3/
http://site.ru/news/4/
http://site.ru/news/5/

На странице должен быть заголовок “Новость №#ID#”, где #ID# - ИД новости, далее должны быть выведены комментарии с постраничной навигацией, по 10 комментариев на странице. При этом если у комментария первого уровня есть ответы, то ответы на втором уровне должны быть сразу отображены. 

Все комментарии должны быть отсортированы по дате: сначала самые свежие.

Если у комментария есть ответы, то должна быть кнопка, в которой написано количество ответов на всех подуровнях, по нажатию на которую подгружаются ответы следующего уровня вложенности.  

Вёрстка должна быть адаптивная, корректно отображаться на любой ширине окна браузера от 320px. 

Пример комментариев, на который ориентироваться - https://vkusvill.ru/media/journal/k-nam-edet-ded-moroz.html

Нужно уделить внимание скорости загрузки страницы (как в публичной части, так и в админке).

**Кеширование использовать нельзя.**
