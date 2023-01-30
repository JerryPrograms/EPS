<?php
function saveFiles($key, $path, $file)
{
    $mainImageName = uniqid() . time() . '.' . $file->getClientOriginalExtension();
    $file->move(storage_path('app/public/' . $path), $mainImageName);
    $mainImageName = 'storage/' . $path . '/' . $mainImageName;
    $in_function_key = '';
    if (!empty($key)) {
        $in_function_key = $key;
    } else {
        $in_function_key = uniqid() . '' . mt_rand(0, 999);
    }
    return $mainImageName;
}
