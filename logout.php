<?php
session_start(); // شروع سشن
session_unset(); // پاک کردن سشن
session_destroy(); // از بین بردن سشن
header("Location: login.html"); // هدایت به صفحه ورود
exit();
?>