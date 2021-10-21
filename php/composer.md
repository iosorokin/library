# Composer
https://getcomposer.org/doc/03-cli.md
## Общее

composer.lock запоминает версии установленных пакетов и последующая установка осуществляется из lock-файла. <br>
В проектах composer.lock должен быть закоммичен

## Команды

### Глобальные параметры

--verbose (-v): ?увеличить объем сообщений? (проверить что это) <br>
--help (-h): вывести информацию <br>
--quiet (-q): без вывода в stdout <br> 
--no-interaction (-n): без интерактивным вопросов ? (проверить что это) <br>
--no-plugins: без планигонов (что за плагины?) <br>
--no-cache: не кешировать <br>
--working-dir (-d): установить рабочий каталог <br>
--profile: выводить информацию о времени исполнения и потреблении памяти (проверить что это) <br>
--ansi: (что это?) <br>
--no-ansi: (что это?) <br>
--version (-V): вывести версию композера <br>

### init
Создает composer.json файл. <br>

--name: Имя пакета <br>
--description: Описание пакета <br>
--author: Имя автора <br>
--type: Тип пакета <br>
--homepage: домашняя страница пакета <br> 
--require-dev: (что это?) <br> 
--stability (-s): (что это?) <br> 
--license (-l): Тип лицензии <br> 
--repository: (что это?) <br> 
--autoload (-a): (что это?) <br> 

### install / i
Устанавливает пакеты из composer.json при отсутствии composer.lock.

--prefer-install: (что это?) изменение ссылки на репозиторий по которой можно взять пакет?
--dry-run: имитирует установку пакета без фактической установки. **(интересная возможность)**
--dev: устанавливает пакеты, перечисленные в require-dev
--no-dev: пропустить установку пакетов из require-dev
--no-autoloader: пропустить генерацию автозагрузочного файла (а зачем, если пакет не загрузится в маршрутную карту классов?)
--no-scripts: Skips execution of scripts defined in composer.json.
--no-progress: Removes the progress display that can mess with some terminals or scripts which don't handle backspace characters.
--optimize-autoloader (-o): Convert PSR-0/4 autoloading to classmap to get a faster autoloader. This is recommended especially for production, but can take a bit of time to run so it is currently not done by default.
--classmap-authoritative (-a): Autoload classes from the classmap only. Implicitly enables --optimize-autoloader.
--apcu-autoloader: Use APCu to cache found/not-found classes.
--apcu-autoloader-prefix: Use a custom prefix for the APCu autoloader cache. Implicitly enables --apcu-autoloader.
--ignore-platform-reqs: ignore all platform requirements (php, hhvm, lib-* and ext-*) and force the installation even if the local machine does not fulfill these. See also the platform config option.
--ignore-platform-req: ignore a specific platform requirement(php, hhvm, lib-* and ext-*) and force the installation even if the local machine does not fulfill it.
