<?php
function storeImage($image, array $addonExtention = null)
{
    $data = [];
    $total = count($image['name']);
    $allowed_extensions = isset($addonExtention) ? array_merge($addonExtention, array('jpg', 'jpeg', 'png')) : array('jpg', 'jpeg', 'png');
    for ($i = 0; $i < $total; $i++) {
        $extension = strtolower(pathinfo($image['name'][$i], PATHINFO_EXTENSION));
        $filename = bin2hex(random_bytes('15')) . '.' . $extension;
        $tmpname = $image['tmp_name'][$i];
        if (in_array($extension, $allowed_extensions)) {
            $folder = "storage/";
            move_uploaded_file($tmpname, $folder . $filename);
            array_push($data, $filename);
        } else {
            echo 'Error: Upload only this extention: ' . implode(', ', $allowed_extensions);
            die();
        }
    }
    if (count($data) > 1) {
        return $data;
    }
    return $data[0];
}
function redirect_back($remove_from_link = null)
{
    if (isset($remove_from_link)) {
        header('Location: ' . str_replace($remove_from_link, '', $_SERVER['HTTP_REFERER']));
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
function storage($image)
{
    $url = new Database;
    return $url->url.'admin/app/storage/'. $image;
}
function asset($file)
{
    $url = new Database;
    return $url->url. 'admin/' . $file;

}
function generateSeoURL($string, $wordLimit = 0)
{
    $separator = '-';

    if ($wordLimit != 0) {
        $wordArr = explode(' ', $string);
        $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
    }

    $quoteSeparator = preg_quote($separator, '#');

    $trans = array(
        '&.+?;'                 => $separator,
        '[^\w\d _-]'            => $separator,
        '\s+'                   => $separator,
        '(' . $quoteSeparator . ')+' => $separator
    );

    $string = strip_tags($string);
    foreach ($trans as $key => $val) {
        $string = preg_replace('#' . $key . '#iu', $val, $string);
    }

    $string = strtolower($string);

    return trim(trim($string, $separator));
}
