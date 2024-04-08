<?php

// logout
session_start();
session_destroy();
header("Location: http://localhost/Ratchet-with-chat-room/Main/Index.php");
