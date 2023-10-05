<?php




// Vornamen
$firstNameArray = array(
    "Liam", "Emma", "Noah", "Olivia", "William", "Ava", "James",
    "Isabella", "Oliver", "Sophia","Benjamin", "Charlotte", "Elijah",
    "Mia", "Lucas", "Amelia", "Mason", "Harper", "Logan", "Evelyn",
    "Alexander", "Abigail", "Ethan", "Emily", "Jacob", "Elizabeth", 
    "Michael", "Mila", "Daniel", "Ella","Henry", "Avery", "Jackson", 
    "Lily", "Sebastian", "Eleanor", "Matthew", "Hazel", "Samuel", "Grace",
    "David", "Chloe", "Joseph", "Victoria", "Carter", "Penelope", "Owen", 
    "Riley", "Wyatt", "Aria","John", "Scarlett", "Jack", "Madison", "Luke", 
    "Luna", "Gabriel", "Aubrey", "Anthony", "Layla","Dylan", "Zoe", "Isaac", 
    "Nora", "Nicholas", "Stella", "Christopher", "Paisley", "Joshua", "Audrey",
    "Miles", "Savannah", "Caleb", "Brooklyn", "Ryan", "Bella", "Nathan", 
    "Claire", "Ezra", "Skylar","Andrew", "Ellie", "Aaron", "Samantha", 
    "Levi", "Sadie", "Adam", "Natalie", "Lincoln", "Violet","Nicholas", 
    "Caroline", "Tyler", "Genesis", "Julian", "Emilia", "Hunter", "Naomi", "Cameron", "Eva"
  );

  

//   Nachnamen
$lastNameArray = array(
  "Müller", "Schmidt", "Schneider", "Fischer", "Weber", "Schulz",
  "Wagner", "Becker", "Hoffmann", "Schäfer", "Bauer", "Koch",
  "Richter", "Klein", "Wolf", "Schröder", "Neumann", "Schwarz",
  "Zimmermann", "Braun", "Krüger", "Hofmann", "Hartmann", "Lange",
  "Schmitt", "Werner", "Schmitz", "Krause", "Meier", "Lehmann",
  "Schmid", "Schulze", "Maier", "Köhler", "Hahn", "Vogel",
  "Jäger", "Meyer", "Peters", "Fuchs", "Engel", "Frank",
  "Berger", "Kaiser", "Lang", "Voigt", "Böhme", "Brandt",
  "Simon", "Jung", "Kuhn", "Keller", "Günther", "Huber",
  "Roth", "Arnold", "Seidel", "Sauer", "Kraft", "Friedrich",
  "Freitag", "Kramer", "Krieg", "Schreiber", "Ott", "Kern",
  "Thomas", "Rieger", "Maurer", "Ritter", "Hermann", "Haas",
  "Winkler", "Lutz", "Gross", "Kirsch", "May", "Bergmann",
  "Schuster", "Beyer", "John", "Koch", "Adam", "Schwarz",
  "Fiedler", "Hesse", "Dietrich", "Eckert", "Möller", "Graf",
  "Schubert", "Heller", "Förster", "Vetter", "Bader", "Scholz",
  "Stein", "Henning", "Geiger", "Kunz", "Reich", "Böttcher",
  "Schafer", "Thiel", "Schrader", "Heinrich", "Klose", "Ullrich"
);



// Email Domains
$domain = array(
    "gmail.com", "yahoo.com", "hotmail.com", "outlook.com", 
    "aol.com", "protonmail.com", "icloud.com", "mail.com", "gmx.de", "web.de"
);



// Orte mit PostleitZahl
$plzArray = array(
  array('Wien', 1010),
  array('Graz', 8010),
  array('Linz', 4020),
  array('Salzburg', 5020),
  array('Innsbruck', 6020),
  array('Klagenfurt', 9020),
  array('Bregenz', 6900),
  array('Eisenstadt', 7000),
  array('St. Pölten', 3100),
  array('Lienz', 9900),
  array('Zell am See', 5700),
  array('Feldkirch', 6800),
  array('Kufstein', 6330),
  array('Krems', 3500),
  array('Villach', 9500),
  array('Schwechat', 2320),
  array('Schärding', 4780),
  array('Mistelbach', 2130),
  array('Horn', 3580),
  array('Ried im Innkreis', 4910),
  array('Murau', 8850),
  array('Bad Ischl', 4820),
  array('Sankt Johann im Pongau', 5600),
  array('Friesach', 9360),
  array('Landeck', 6500),
  array('Korneuburg', 2100),
  array('Neunkirchen', 2620),
  array('Bruck an der Mur', 8600),
  array('Vöcklabruck', 4840),
  array('Gmunden', 4810),
  array('Judenburg', 8750),
  array('Wörgl', 6300),
  array('Kapfenberg', 8605),
  array('Knittelfeld', 8720),
  array('Amstetten', 3300),
  array('Waidhofen an der Ybbs', 3340),
  array('Rottenmann', 8786),
  array('Schladming', 8970),
  array('Eggenburg', 3730),
  array('Baden', 2500),
  array('Zwettl', 3910),
  array('Gmünd', 3950),
  array('Steyr', 4400),
  array('Freistadt', 4240),
  array('St. Valentin', 4300),
  array('Enns', 4470),
  array('Leibnitz', 8430),
  array('Liezen', 8940),
  array('Weiz', 8160),
  array('Rohrbach', 4150),
  array('Güssing', 7540),
  array('Oberwart', 7400),
  array('Feldbach', 8330)
);



// Straßennamen
$streetArray = array(
  "Am Rainberg 5", "Feldgasse 6", "Kirchplatz 10",
  "Berggasse 8", "Bahnhofstraße 12", "Neubaugasse 21",
  "Hauptstraße 15", "Hofgasse 7", "Rathausplatz 1",
  "Schloßberg 1", "Burggasse 8", "Parkstraße 10",
  "Heideweg 15", "Friedhofstraße 2", "Sankt-Peter-Straße 15",
  "Schloßstraße 4", "Riedenburgstraße 20", "Schillerstraße 2",
  "Bürgermeisterstraße 8", "Römerstraße 30", "Mozartplatz 3",
  "Johann-Strauß-Straße 10", "Schützenweg 5", "Talstraße 18",
  "Am Hinterfeld 7", "Gartenstraße 6", "Neudorfstraße 9",
  "Am Mitterfeld 12", "Bachgasse 3", "Am Teich 17",
  "Schmiedgasse 22", "Buchbergstraße 7", "Im Feld 14",
  "Hofberg 9", "Oberdorfstraße 2", "Innere Stadt 14",
  "Am Steinbruch 11", "Mühlenweg 8", "Hauptplatz 3",
  "Neue Straße 5", "Am Bründl 6", "Bachweg 4",
  "Schulstraße 16", "Kirchweg 19", "Obere Gasse 7",
  "Untere Gasse 12", "Dorfplatz 2", "Fuchsweg 10",
  "Sonnengasse 8"
);




// Zeichen für Gamekey
$codeArray = array_merge(
  range('A', 'K'),
  range('M', 'N'), 
  range('P', 'Z'), 
  range(1, 9)
);



// Platformen
$platformArray = array(
  "Pc",
  "Playstation",
  "Xbox",
  "Nintendo"
);


// SPiele genres
$genreArray = array(
  "Action",
  "Adventure",
  "Role-playing",
  "Simulation",
  "Strategy",
  "Sports",
  "Racing",
  "Fighting",
  "Platformer",
  "Puzzle",
  "Shooter",
  "Survival",
  "Horror",
  "Stealth",
  "Educational",
  "Music",
  "Party",
  "Casual",
  "Arcade",
  "Trivia"
);


// Spiele Publisher
$publisherArray = array(
  "Electronic Arts",
  "Ubisoft",
  "Activision",
  "Bethesda Softworks",
  "Square Enix",
  "Capcom",
  "Sega",
  "Microsoft Studios",
  "Sony Interactive Entertainment",
  "Nintendo",
  "Blizzard Entertainment",
  "Rockstar Games",
  "Valve Corporation",
  "2K Games",
  "Bandai Namco Entertainment",
  "Konami",
  "CD Projekt",
  "THQ Nordic",
  "Paradox Interactive",
  "Focus Home Interactive"
);


// Spiele Developer
$developerArray = array(
  "Blizzard Entertainment",
  "Bethesda Game Studios",
  "Rockstar Games",
  "Electronic Arts (EA)",
  "Ubisoft",
  "Naughty Dog",
  "Valve Corporation",
  "CD Projekt Red",
  "Square Enix",
  "Activision"
);



?>