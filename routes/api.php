<?php

use Kraenkvisuell\BelongsToManyField\Http\Controllers\ResourceController;

Route::get('/{resource}/options/{relationship}/{optionsLabel}/{dependsOnValue?}/{dependsOnKey?}', [ResourceController::class, 'index']);
