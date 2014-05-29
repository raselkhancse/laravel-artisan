$ php artisan

Laravel Framework version 4.1.21

Usage:
  [options] command [arguments]

Options:
  --help           -h Display this help message.
  --quiet          -q Do not output any message.
  --verbose        -v|vv|vvv Increase the verbosity of messages: 1 for normal ou
tput, 2 for more verbose output and 3 for debug
  --version        -V Display this application version.
  --ansi              Force ANSI output.
  --no-ansi           Disable ANSI output.
  --no-interaction -n Do not ask any interactive question.
  --env               The environment the command should run under.

Available commands:
  changes                     Display the framework change list
  clear-compiled              Remove the compiled class file
  down                        Put the application into maintenance mode
  dump-autoload               Regenerate framework autoload files
  env                         Display the current framework environment
  help                        Displays help for a command
  list                        Lists commands
  migrate                     Run the database migrations
  optimize                    Optimize the framework for better performance
  routes                      List all registered routes
  serve                       Serve the application on the PHP development serve
r
  tail                        Tail a log file on a remote server
  tinker                      Interact with your application
  up                          Bring the application out of maintenance mode
  workbench                   Create a new package workbench
asset
  asset:publish               Publish a package's assets to the public directory

auth
  auth:clear-reminders        Flush expired reminders.
  auth:reminders-controller   Create a stub password reminder controller
  auth:reminders-table        Create a migration for the password reminders tabl
e
cache
  cache:clear                 Flush the application cache
command
  command:make                Create a new Artisan command
config
  config:publish              Publish a package's configuration to the applicati
on
controller
  controller:make             Create a new resourceful controller
db
  db:seed                     Seed the database with records
generate
  generate:controller         Generate a new controller.
  generate:form               Dump form HTML for a model
  generate:migration          Generate a new migration.
  generate:model              Generate a new model.
  generate:pivot              Generate a pivot table
  generate:resource           Generate a resource.
  generate:scaffold           Generate scaffolding for a resource.
  generate:seed               Generate a seed file.
  generate:test               Generate a PHPUnit test class.
  generate:view               Generate a new view.
key
  key:generate                Set the application key
migrate
  migrate:install             Create the migration repository
  migrate:make                Create a new migration file
  migrate:publish             Publish a package's migrations to the application
  migrate:refresh             Reset and re-run all migrations
  migrate:reset               Rollback all database migrations
  migrate:rollback            Rollback the last database migration
queue
  queue:failed                List all of the failed queue jobs
  queue:failed-table          Create a migration for the failed queue jobs datab
ase table
  queue:flush                 Flush all of the failed queue jobs
  queue:forget                Delete a failed queue job
  queue:listen                Listen to a given queue
  queue:retry                 Retry a failed queue job
  queue:subscribe             Subscribe a URL to an Iron.io push queue
  queue:work                  Process the next job on a queue
session
  session:table               Create a migration for the session database table
view
  view:publish                Publish a package's views to the application