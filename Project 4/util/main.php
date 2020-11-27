<?php
  $doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_STRING);
  //get applicaton path
  $uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);
  $dirs = explode('/', $uri);
  $app_path = '/' . $dirs[1] . '/';

  set_include_path($doc_root . $app_path);

  // start the new session
  $lifetime = 60 * 60 * 24 * 365; //set lifetime for the session cookie
  session_set_cookie_params($lifetime);
  //start the session
  session_start();
