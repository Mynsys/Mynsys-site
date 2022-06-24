<?
    $game = $_GET['game'];
    $platform = $_GET['platform'];
    file_put_contents("data.txt", "{$game}|{$platform}");
?>