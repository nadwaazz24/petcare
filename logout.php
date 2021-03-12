<?php

session_start();
session_unset("username");
session_unset("email");
session_unset("sebagai");
session_unset("nama");
header("Location: login.php");