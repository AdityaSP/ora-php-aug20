<?php
session_start();
echo "Hi" . $_SESSION['uname'];
echo "Session name". session_name();

