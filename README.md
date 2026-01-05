# solidwork/contao-solid-counter-bundle

Animated count-up counter content element for **contao 5.3** (controller-based).

## Features
- integer target value
- optional suffix (e.g. `+`, `K`, `Jahre`)
- optional text below
- duration in ms (default 3000)
- starts on visibility (IntersectionObserver)
- counts once by default, optionally repeats whenever visible again

## Installation
```bash
composer require solidwork/contao-solid-counter-bundle
php vendor/bin/contao-console assets:install --symlink
```

## Usage
Create a content element: **Zähler (Count-Up) (Solid)**

## License
LGPL-3.0-or-later
