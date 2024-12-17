

# Основы PHP.
## Урок 10. Семинар. Разработка каркаса приложения

- Добавьте к шаблону подключение файлов стилей так, чтобы в дальнейшем можно было дорабатывать внешний вид системы.<br>

- Сформируйте еще три подключаемых к скелету блока – шапку сайта (она всегда будет одинаковой по стилю и располагаться в самой верхней части), подвал сайта (также одинаковый, но в нижней части) и sidebar (боковая колонка, которую можно наполнять новыми элементами).<br>

- Средствами TWIG выводите на экран текущее время.<br>

- Создайте обработку страницы ошибки.<br>
Например, если контроллер на найден, то нужно вызывать специальный метод рендеринга, который сформирует специальную страницу ошибок.<br>

- Для страницы ошибок формируйте HTTP-ответ 404.<br> 
Это можно сделать при помощи функции *header*.<br>

- Реализуйте функционал сохранения пользователя в хранилище. <br>
Сохранение будет происходить при помощи GET-запроса.<br>

```
/user/save/?name=Иван&birthday=05-05-1991
```

### Примечание:

1. Установить Docker и Docker Compose на компьютер:  
   - [Установка Docker](https://docs.docker.com/get-docker/)
   - [Установка Docker Compose](https://docs.docker.com/compose/install/)

2. Проверить корректность установки командой:  

   ```bash
   docker --version
   docker-compose --version
   ```

3. Запустить программу Docker Desktop.
4.  Проверить работает ли сервис (статус должен быть Running):

   ```bash
   Get-Service docker
   ```
  

5. Открыть терминал в папке проекта.
6. Построить образы Docker: 

   ```bash
   docker-compose build
   ```

7. Запустить контейнеры в фоновом режиме:

   ```bash
   docker-compose up -d
   ```
8. Проверить, что все контейнеры работают:  

   ```bash
   docker ps
   ```

9. Перезапуск контейнеров:

   ```bash
   docker-compose down
   docker-compose up --build -d

   ```