#Opis

Zadanie rekrutacyjne dla Cobiro.
Implementacja API z jednym endpointem umożlwiającym dodanie produktu.

---

Todo:
- Testy nie przechodzą, brakuje implementacji interfejsu HTTP w laravelu.
- Nie są zaimplementowane interfejsy do zapisu/odczytu danych.

## Zastosowano
- Separacje modułów zapisu i odczytu
- Użycie fasady jako API modułu w modularnym monolicie
- Laravel jako framework w którym obecnie moduły są zaimplementowane
- Podejście ATDD

## Założenia
- API na 3. (level 2) poziomie dojrzałości w modelu Richardsona.
- W ramach uproszczenia storage InMemory
- Nie rozważamy jak zaimplementować pieniądze. Sprowadzamy do inta.

## Krótki komentarz
Podejście znane z CQRSa czyli odspearowanie modułów zapisu/odczytu pozwala na uzycie dowolnej technologii zapisu.

Nie skorzystałem z Event Sourcingu ponieważ w tym wypadku nie widzę zalet z nakladu pracy który wymaga, być może gdyby pojawiła się inna domena chciałbym z takiego rodzaju komunikacji między modułami skorzystać.

CQRS z Event Sourcingiem uważam za duże narzędzie z wysokim stopniem skomplikowania. Dodatkowo moduł na tym etapie wygląda na CRUDa i tak zapewne w taki sposób bym je implementował.
Ewentualnie, gdyby pojawiła się jakaś logika biznesowa w tym miejscu, spórobwałbym ją wynieść do innego modułu, a obecnego CRUDa wykorzystał jak taki system do zarządzania deskryptorami produktów.

Chcę też skonforntować już rozwiązanie i zapoznać się z komentarzem i sugestiami.
