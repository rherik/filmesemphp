<?php
$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\ntabela filmes apagada\n"; 

$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n"; 
else
    echo "\nerro ao criar tabela filmes\n"; 

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    0,
    'Get Out (Jordan Peele)',
    'https://www.themoviedb.org/t/p/w300/uR6JRUBUcaGCgcD24njMazUThjz.jpg',
    'Chris and his girlfriend Rose go upstate to visit her parents for the weekend. At first, Chris reads the familys overly
    accommodating behavior as nervous attempts to deal with their daughters interracial relationship, but as the weekend progresses,
    a series of increasingly disturbing discoveries lead him to a truth that he never could have imagined.',
    10
)";

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n"; 

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Do The Right Thing (Spike Lee)',
        'https://www.themoviedb.org/t/p/w300/jxoNPnt14lKwZo5PwP89MV2qzSQ.jpg',
        'Salvatore Sal Fragione is the Italian owner of a pizzeria in Brooklyn. A neighborhood local, Buggin Out, becomes upset when he
        sees that the pizzerias Wall of Fame exhibits only Italian actors. Buggin Out believes a pizzeria in a black neighborhood should
        showcase black actors, but Sal disagrees. The wall becomes a symbol of racism and hate to Buggin Out and to other people in the
        neighborhood, and tensions rise.',
        10
    )";
    
if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n"; 
    
?>