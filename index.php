<?php

session_start();

 /* Display the template for registration */
include 'templates/header.php';

include 'templates/register_form.php';

/* Include the footer */
include 'templates/footer.php';

/* Reset the session state */
session_unset();
?>