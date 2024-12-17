<!DOCTYPE html>
<html>
    <head>
        <title>{{ title }}</title>
        <link rel="stylesheet" href="/assets/css/styles.css">
    </head>
    <body>
        <header>
            <h2>Добро пожаловать в наше приложение</h2>
        </header>
        <div class="sidebar">
            {% block sidebar %} 
                <p>Боковая панель Sidebar</p>
            {% endblock %}
        </div>
        <div class="content">
            {% include content_template_name %}
            <p>Текущее время : {{ "сейчас"|date("H:i:s") }}</p>
        </div>
        <footer>
            <p>Copyright © 2024 Все права защищены.</p>
        </footer>
    </body>
</html>