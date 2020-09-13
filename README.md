# test_cineBooks

Тестовое задание


Есть стрим формата "{{<ID string uuid v4 (8-4-4-4-11)><Message string 10..1024 chars>}}{{<ID><Message>}}.."

его нужно принять, разобрать, разложить в результирующий массив вида (result => [uuid=>message]) на валидные и невалидные объекты, вывести на экран/консоль сообщение о статистике разбора стрима, объекты и/или ошибки

упрощение №1 - пример принятого стрима:

“{{2f520747-90c4-4100-b836-ad461d33907fLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum risus in maximus fermentum. Maecenas pretium vitae justo ac pulvinar. Nunc fringilla auctor nisl vitae finibus. Duis aliquam, erat vitae sollicitudin auctor}}{{4cfc5ea1-c75e-4f47-81d3-dcb9c91144cdPellentesque in lorem et lectus cursus faucibus. Proin euismod, tortor id lacinia ultrices, felis nisi fermentum metus, non volutpat libero diam sed enim}}{{c75a5849-45a5-478a-8199-d69caa9e878dCras gravida tempus nulla, sed placerat turpis tempus phare”

упрощение №2 - никак вывод на экран/консоль не структурировать, просто плоским списком с переводом строки

условие - код должен быть универсальным - если подать подобный пример, но с другими данными - все должно работать

Для решения можно воспользоваться онлайн редактором на сайте https://repl.it

Время выполнения 40 мин.

uuid generator: https://www.uuidgenerator.net/version4

message generator: https://www.lipsum.com/feed/html
 
