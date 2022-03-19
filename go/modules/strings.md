# Мутация
- Clone
- Cut
- Fields
Разбивает строку по пробелам?
- FieldsFunc 
Настраиваемое в колбеке разбиение строки по найденной руне?
- Join
Склеить массив строк с использованием разделителя
- Repeat
- Replace
- ReplaceAll 
- Split
- SplitN
Разбить по разделителю
- SplitAfter
- SplitAfterN 
(Не понял в чём разница)
- ToLower
- ToLowerSpecial 
- ToTitle
Что это? Перевод строки в Unicode где первая рука будет заглавной?
- ToTitleSpecial 
- ToUpper
- ToUpperSpecial
- ToValidUTF8
Замена всех невалидных кодировке рун?
- Trim 
- TrimFunc
- TrimLeft
- TrimLeftFunc
- TrimPrefix
- TrimRight 
- TrimRightFunc
- TrimSpace
- TrimSuffix 


В чём разница между Fields и Split ?

# Итерирование
- Map
Перебрать строку по каждой руне

# Операции
- Count 

# Сравнение
- Compare
- EqualFold
что-то про сравнение между кодировоками

# Поиск 
- Contains
- ContainsAny
- ContainsRune


- HasPrefix
- HasSuffix


- Index 
Позиция первого вхождения подстроки в строку
- LastIndex
- LastIndexAny
- LastIndexByte
- LastIndexFunc
- IndexAny
- IndexByte
- IndexFunc
- IndexRune

# Builder
Построитель строки
- Cap
Общая ёмкость(capacity), выделенная под строку?
- Grow
Увеличить ёмкость?
- Len
Текущая занятость предельной ёмкости
- Reset
- String
Вернуть текуще состояние собранной строки?
- Write
Записать массив байтов
- WriteByte
Записать один байт
- WriteRune
- WriteString

# Reader
- NewReader
- Len
Количество непрочитанных байтов
- Read
Прочесть часть строки содержащей байты, или прочесть массив байтов? Тогда зачем в конструктор передавать строку было
- ReadAt 
Прочесть со смещением
- ReadByte
- ReadRune
- Reset
- Seek
?? что это
- Size
Общая длина строки
- UnreadByte
- UnreadRune 
- WriteTo
Передать строку из модуля чтения в модуль записи

# Replacer
- NewReplacer
- Replace
- WriteString
Передать строку из модуля замены в модуль записи
