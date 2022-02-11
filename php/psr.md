# PHP Standards Recommendations

# PSR-0 Autoloading Standard (DEPRECATED)
  + A fully-qualified namespace and class must have the following structure \<Vendor Name>\(<Namespace>\)*<Class Name>
  + Each namespace must have a top-level namespace ("Vendor Name").

# PSR-1 Basic Coding Standard
  + use only <?php ?> tags or the short-echo <?= ?>
  + use only UTF-8 without BOM
  + don't use "side effect" - execution of logic not directly related to declaring classes, functions, constants, etc.
  + class names MUST be declared in StudlyCaps.
  + namespaces use PSR-0, PSR-4
  
# PSR-2 Coding Style Guide (DEPRECATED)
  + Code MUST use 4 spaces for indenting, not tabs.
  + There MUST NOT be a hard limit on line length; the soft limit MUST be 120 characters; lines SHOULD be 80 characters or less.
  
# PSR-3 Logger Interface 
Описывает уровни ошибок + сеттер для логера
  
# PSR-4 Autoloading Standard
  + \<NamespaceName>(\<SubNamespaceNames>)*\<ClassName>
  
# PSR-5	PHPDoc Standard (Draft)
# PSR-6 Caching Interface
  Интерфейс работы с кешем
# PSR-7 HTTP Message Interface
# PSR-8	Huggable Interface (Abandoned)
# PSR-9 Security Advisories (Abandoned)
# PSR-10 Security Reporting Process (Abandoned)
# PSR-11 Container Interface
Интерфейс сервис-контейнера (get, has)
# PSR-12 Extended Coding Style Guide
  + use Vendor\Package\{ClassA as A, ClassB, ClassC as C}
  + Code MUST use an indent of 4 spaces for each indent level, and MUST NOT use tabs for indenting.
 
# PSR-13: Link definition interfaces
  Интерфейс описывающий стандарт работы с ссылками?
# PSR-14: Event Dispatcher
# PSR-15: HTTP Handlers
Интерфейс для мидлваров, обработчиков реквеста
# PSR-16: Simple Cache
Упрощенный интерфейс кеширования, элементартнее чем PSR-6
# PSR-17 HTTP Factories
Фабрики построения запроса и ответа
# PSR-18 HTTP Client
Обработал запрос, отдал ответ
# PSR-19 PHPDoc tags (Draft)
# PSR-20 Clock (DRAFT)
# PSR-21 Internationalization (DRAFT)
