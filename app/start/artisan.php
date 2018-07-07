<?php

/*
|--------------------------------------------------------------------------
| Register The Artisan Commands
|--------------------------------------------------------------------------
|
| Each available Artisan command must be registered with the console so
| that it is available to be called. We'll register every command so
| the console gets access to each of the command object instances.
|
*/
Artisan::add(new CronRunCommand);

Artisan::add(new PullVatsimDataCommand);
Artisan::add(new PullWeatherCommand);
Artisan::add(new PullPilotsDataCommand);
Artisan::add(new ImportTrainingNotes);
Artisan::add(new ForumMemberAdd);
Artisan::add(new RatingFix);
Artisan::add(new GetRoster);