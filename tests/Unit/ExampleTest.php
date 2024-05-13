<?php

describe('Detailed description', function () {
    test('example', function () {
        expect(true)->toBeTrue();
    });

    test('sum', function () {
        $result = 1 + 2;

        expect($result)->toBe(3)
            ->toBeNumeric()
            ->not->toBeString();
    });

    test('str', function () {
        expect("str")->toBe("str");
        expect("str")->toContain("s");
    });
});

