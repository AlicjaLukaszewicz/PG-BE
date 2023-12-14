# PG-BE
## Opis projektu
Projekt "Biznes elektroniczny" ma na celu stworzenie sklepu internetowego wzorowanego na stronie odzieżowej H&M przy użyciu platformy e-commerce "Prestashop".

## Wykorzystana wersja oprogramowania
Aktualnie wykorzystujemy najnowszą stabilną wersję Prestashop 1.7.8.

## Wykorzystane oprogramowanie
- Baza danych: MySQL
- Narzędzie do zarządzania bazą danych: phpMyAdmin

## Autorzy
- Alicja Łukaszewicz 
- Anna Zhurba 
- Dominik Noga 

## Instrukcja instalacji
1. Pobierz plik `docker-compose.yml` do dowolnego folderu na Windows.
2. Upewnij się, że masz WSL skonfigurowane z Docker Desktop.
3. Pobierz plik bazy danych `.sql` znajdujący się w folderze Database.
4. Uruchom Docker Compose.
5. Zaloguj się do phpMyAdmin na porcie 8081 z nazwą użytkownika: [root] i hasłem: [prestashop].
6. Kliknij na bazę danych Prestashop po lewej stronie.
7. Następnie zaimportuj dane wcześniej pobrane z repozytorium.
