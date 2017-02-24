<?php
function dump($data)
{
  echo "<pre>";
  echo var_dump($data);
  echo "</pre>";
}

function breadcrumbs($home = 'Home') {
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

    // This will build our "base URL" ... Also accounts for HTTPS :)
    $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

    // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
    $breadcrumbs = Array("<a href=\"$base\"><i class=\"icon-home\"></i> $home</a>");

    // Find out the index for the last value in our path array
    $last = end(array_keys($path));

    // Build the rest of the breadcrumbs
    foreach ($path AS $x => $crumb) {
        // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
        $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

        // If we are not on the last index, then display an <a> tag
        if ($x != $last)
            $breadcrumbs[] = "<a class=\"tip-bottom\" href=\"$base$crumb\">$title</a>";
        // Otherwise, just display the title (minus)
        else
            $breadcrumbs[] = '<a class="current">' . $title . '</a>';
    }

    // Build our temporary array (pieces of bread) into one big string :)
    return "<div id=\"breadcrumb\">" . implode($breadcrumbs) . "</div>";
}
// breadcrumbs()
// breadcrumbs(' > ')
// breadcrumbs(' ^^ ', 'Index')
