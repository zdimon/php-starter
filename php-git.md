# GIT.
        
## Создание репозитория.

    git init

## Проверка состояния

    git status

## Добавление файлов в индекс отслеживания.

    git add <имя файла>
    git add .
    git add --all

## Комит изменений (локально).

    git commit -m 'каменты'

## Привязка к удаленному репозиторю (один раз).


    git remote add origin git@github.com:zdimon/php-starter.git

## Отправка изменений на сервер-провайдер с созданием ветки master.

    git push -u origin master
    git push

## Потянуть изменнения с сервера

    git pull

## Клонирование репозитория.

    git clone <url>

## Генерация ключей

    ssh-keygen

## Переход на комит или на ветку

    git checkout <id-commit | name-of-branch>

## Создание ветки

    git branch 234-login-mail-book














