# Configuration front-end Laravel

## Installation des dépendances
```
npm rm bootstrap && npm i -D gulp bootstrap rfs style-sherpa laravel-mix-purgecss
```

## Copie des dossiers dans resources/ et du gulpfile à la racine

## Configuration laravel mix
```
const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .purgeCss({
        whitelistPatterns: [/tooltip/, /fade/, /show/, /arrow/, /collaps/, /carousel/, /feedback/, /was-validated/],
    });

mix.browserSync('subvitamine.test');
```

## Ajout d’une route pour le guide de style

```
Route::get('/style', function () {
    return view('styleguide');
});
```

## Lancement du serveur de développement 

```
npm run watch
```

## Optionnel : écoute des changements sur le guide de style

```
gulp
```

