<?php

exec(__DIR__ . '/vendor/robmorgan/phinx/bin/phinx rollback -t=0');
exec(__DIR__ . '/vendor/robmorgan/phinx/bin/phinx migrate');
exec(__DIR__ . '/vendor/robmorgan/phinx/bin/phinx seed:run');