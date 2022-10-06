# Drupal

## Instalation

### use lando to install drupal

    https://lando.dev/
    https://docs.lando.dev/getting-started/
    https://docs.lando.dev/getting-started/installation.html

- Download dmg package from here:  
   https://github.com/lando/lando/releases/download/v3.6.4/lando-x64-v3.6.4.dmg

- initialize drupal recipe

  ```shell
  create a new folder [project-name]
  cd into it
  lando init \
  --source remote \
  --remote-url https//www.drupal.org/download-latest/tar.gz \
  --remote-options= "--strip-cpmponents 1" \
  -- recipe drupal9 \
  --webroot . \
  --name [project-name]
  ```

- start it up
  ```shell
  lando start
  ```
- install a site local drush

  ```shell
  lando composer require drush/drush
  ```

- install drupal
  ```shell
  lando drush site:install --db-url=mysql://drupal9//drupal9@database/drupal9 -y
  ```
- list information about this app
  ```shell
  lando info
  ```

add phpmyadmin from .lando.yml file

```yml
name: [project-name]
recipe: drupal9
config:
  webroot:
services:
  myservice:
    type: phpmyadmin
```

```shell
lando restart
```

### Create apage:

- check tutorial to create a page: https://www.youtube.com/watch?v=iwJW18NA_S4

https://www.youtube.com/results?search_query=create+project+drupal+9+tutorial
