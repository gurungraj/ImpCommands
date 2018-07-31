<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['himalayan.test'] = array(
    'uri' => 'test-himalayan.pantheonsite.io',
    'db-url' => 'mysql://pantheon:504eb64c83a34808a2036b9fd3b66a66@dbserver.test.3099da1a-443f-4422-9b47-621ce862673f.drush.in:12751/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.3099da1a-443f-4422-9b47-621ce862673f.drush.in',
    'remote-user' => 'test.3099da1a-443f-4422-9b47-621ce862673f',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['himalayan.dev'] = array(
    'uri' => 'dev-himalayan.pantheonsite.io',
    'db-url' => 'mysql://pantheon:676300ffd4f243d2b2b6b5653faa0b8e@dbserver.dev.3099da1a-443f-4422-9b47-621ce862673f.drush.in:14032/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.3099da1a-443f-4422-9b47-621ce862673f.drush.in',
    'remote-user' => 'dev.3099da1a-443f-4422-9b47-621ce862673f',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['himalayan.live'] = array(
    'uri' => 'live-himalayan.pantheonsite.io',
    'db-url' => 'mysql://pantheon:32fc43d9885c48d487149bd093050c7a@dbserver.live.3099da1a-443f-4422-9b47-621ce862673f.drush.in:13710/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.3099da1a-443f-4422-9b47-621ce862673f.drush.in',
    'remote-user' => 'live.3099da1a-443f-4422-9b47-621ce862673f',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
