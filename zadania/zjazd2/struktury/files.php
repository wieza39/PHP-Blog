<?php

$path = $_POST['path'];
$folder = $_POST['folder'];
$action = $_POST['action'];
$full_path = $path . $folder;

if (substr($path, -1) !== '/') {
    $path .= '/';
}

if (!file_exists($path . $folder_name)) {
    return "The directory does not exist.";
}

switch ($action) {
    case 'read':
        if (is_dir($full_path)) {
            $files = array_diff(scandir($full_path), array('.', '..'));
            echo "The files in the directory are: " . implode(', ', $files);
        } else {
            echo "The directory does not exist.";
        }
        break;
    case 'delete':
        if (is_dir($full_path)) {
            if (count(glob($full_path . '/*')) !== 0) {
                echo "The directory is not empty.";
            } else {
                rmdir($full_path);
                echo "The directory was deleted.";
            }
        } else {
            echo "The directory does not exist.";
        }
        break;
    case 'create':
        if (is_dir($full_path)) {
            echo "The directory already exists.";
        } else {
            mkdir($full_path);
            echo "The directory was created.";
        }
        break;
    default:
        echo "Invalid action specified.";
        break;
}
