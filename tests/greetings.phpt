<?php

use Tester\Assert;

# Načteme knihovny Testeru.
require __DIR__ . '/../vendor/autoload.php';          # při instalaci Composerem
//require __DIR__ . '/../tester/Tester/bootstrap.php';  # při ruční instalaci

# Načteme testovanou třídu. V praxi se o to zřejmě postará Composer anebo váš autoloader.
require __DIR__ . '/../src/Greeting.php';


# Konfigurace prostředí velmi zpřehlední výpisy chyb.
# Nemusíte použít, pokud preferujete výchozí výpis PHP.
Tester\Environment::setup();


$o = new Greeting;

Assert::same( 'Hello John', $o->say('John') );  # Očekáváme shodu

Assert::exception(function() use ($o) {         # Očekáváme vyjímku
    $o->say('');
}, 'InvalidArgumentException', 'Invalid name');
