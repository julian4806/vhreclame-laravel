<p align="center"><a href="https://vhreclame.nl/" target="_blank"><img src="https://vhreclame.nl/img/core-img/logo.png" width="400" alt="Laravel Logo"></a></p>

## Laravel Vhreclame klant opdracht

Website voor [Vhreclame](https://vhreclame.nl/) met laravel backend.
Deze website bevat een volledig CRUD systeem voor het beheren van:

-   Foto's in de fotogallerij
-   De folders in de fotogallerij
-   Foto's die weergegeven worden in de foto-slider
-   Kopjes en teksten op verschillende pagina's

## Hoe te installeren op jou systeem?

#### Stap 1, Clone de Repository

```
git clone https://github.com/julian4806/vhreclame-laravel
```

#### Stap 2, navigeer naar de gekloonde folder

```
cd vhreclame-laravel
```

#### Stap 3, installeer alle dependencies

```
composer install
```

```
npm install
```

#### Stap 4, hermoem de .env.example naar .env en zet je database gegevens erin.

voorbeeld:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vhreclame_vanilla_laravel
DB_USERNAME=root
DB_PASSWORD=
```

#### Stap 5, Als het goed is kun je nu aan de slag. Voer deze twee commando's uit in verschillende terminals.

```
php artisan serve
```

```
npm run dev
```
