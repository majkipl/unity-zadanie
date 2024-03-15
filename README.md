# System Zarządzania Zoo

Ten projekt to prosty system zarządzania zoo zaimplementowany w języku PHP, demonstrujący zasady programowania obiektowego oraz wykorzystanie interfejsów i klas abstrakcyjnych.

## Spis treści
1. [Przegląd](#przegląd)
2. [Struktura Projektu](#struktura-projektu)
3. [Klasy i Interfejsy](#klasy-i-interfejsy)
4. [Użycie](#użycie)
5. [Docker](#docker)

## Przegląd
System zarządzania zoo pozwala użytkownikom definiować różne zwierzęta z określonymi cechami, takimi jak gatunek, imię i nawyki żywieniowe. Zwierzęta mogą należeć do różnych kategorii na podstawie ich typu żywienia: mięsożerne, roślinożerne lub wszystkożerne. Dodatkowo, zwierzęta z futrem mogą przechodzić proces "czesania" jako część ich codziennej opieki.

## Struktura Projektu
Projekt jest zorganizowany w przestrzeni nazw w celu zorganizowania różnych komponentów:
- **Zoo\Classes**: Zawiera klasy abstrakcyjne oraz konkretne implementacje zwierząt.
- **Zoo\Interfaces**: Definiuje interfejsy dla różnych funkcjonalności.
- **Zoo\Strategies\Nutritions**: Zawiera klasy implementujące różne strategie żywieniowe.

## Klasy i Interfejsy
- **Animal**: Klasa abstrakcyjna reprezentująca wspólne atrybuty i zachowania zwierząt w zoo.
- **FurryInterface**: Interfejs definiujący zachowanie dla zwierząt z futrem, takich jak czesanie.
- **NutritionInterface**: Interfejs definiujący zachowanie karmienia dla zwierząt.
- **CarnivorousNutrition**, **HerbivorousNutrition**, **OmnivorousNutrition**: Klasy implementujące konkretne strategie karmienia na podstawie diety zwierzęcia.
- Konkretne klasy zwierząt, takie jak Tygrys, Słoń, Nosorożec, Lis, Irbis śnieżny i Królik, z każdą implementującą specyficzne cechy i zachowania.

## Użycie
Aby skorzystać z tego systemu zarządzania zoo:
1. Upewnij się, że masz zainstalowany PHP na swoim systemie.
2. Sklonuj repozytorium i przejdź do katalogu projektu.
3. Zainstaluj zależności za pomocą Composera: `composer install`.
4. Uruchom główny skrypt: `php index.php`.

## Docker
Projekt zawiera plik `docker-compose.yaml`, który ułatwia uruchomienie systemu w kontenerze Docker. Aby skorzystać z kontenera Docker, wykonaj następujące kroki:
1. Zainstaluj Docker i Docker Compose na swoim systemie.
2. Uruchom kontenery Docker za pomocą komendy: `docker-compose up -d`.
3. System będzie dostępny pod adresem `http://localhost:9921`.
