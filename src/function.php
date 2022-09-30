<?php

function sayHello(string $name= "Hello Dr. Manhattan"): string {
    return "Hello $name";
}

function whoAmI(string $name, array $watchmen = []): string|null {
    if (in_array($name, $watchmen)) {
        return "$name est un Watchmen";
    }

    return "c'est un intrus";
}