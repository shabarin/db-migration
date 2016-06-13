<?php

namespace Dbml\CliControllers;

class NewController extends BaseController {

    public function handle($request) {
        parent::handle($request);
        $this->initTracker();
        $migrations = $this->app->getAllMigrations();

        foreach ($migrations as $migration) {
            if ($migration->status == 'new') {
                $this->printMigration($migration);
            }
        }
    }
}
