<?php

it('can render a dusk attribute', function () {
    test()->blade("@dusk('dusk-test-string')")
        ->assertSee('dusk=')
        ->assertSee('dusk-test-string');
});
