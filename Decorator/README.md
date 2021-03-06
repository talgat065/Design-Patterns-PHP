## Декоратор
***Паттерн Декоратор*** динамически наделяет объект новыми возможностями и является гибкой альтернативой субклассированию в области расширения функциональности.

### Принципы проектирования

> Классы должны быть открыты для расширения, но закрыты для изменения.
 
### Ключевые моменты

- Наследование — одна из форм расширения, но оно не всегда обеспечивает гибкость архитектуры.
- Следует предусмотреть возможность расширения поведения без изменения существующего кода.
- Композиция и делегирование часто используются для динамического добавления нового поведения.
- Паттерн Декоратор предоставляет альтернативу субклассированию в области расширения поведения.
- Типы декораторов соответствуют типам декорируемых компонентов (соответствие достигается посредством наследования или реализации интерфейса).
- Декораторы изменяют поведение компонентов, добавляя новую функциональность
  до и (или) после (или даже вместо) вызовов методов компонентов.
- Компонент может декорироваться любым количеством декораторов.
- Декораторы обычно прозрачны для клиентов компонента (если клиентский код не зависит от конкретного типа компонента).