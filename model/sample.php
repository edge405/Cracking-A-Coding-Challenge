<?php
include 'like.php';

if (isAlreadyExist($conn, 1, 1)) {
    echo "true";
} else {
    echo "false";
}
