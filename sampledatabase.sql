use Clarins;

INSERT INTO
    users
VALUES
    ("admin", sha1(12345)),
    ("user1", sha1(12345)),
    ("user2", sha1(123456));

INSERT INTO
    catalogs (name, category, description)
VALUES
    (
        "Cleaners & Toners",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Serums",
        "Face",
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo."
    ),
    (
        "Day care",
        "Face",
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo."
    ),
    (
        "Night care",
        "Face",
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo."
    ),
    (
        "Hand & Foot care",
        "Body",
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo."
    ),
    (
        "Bath & Shower",
        "Body",
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo."
    ),
    (
        "Sun Protection",
        "Other",
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo."
    ),
    (
        "Hair dye",
        "Other",
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo."
    ),
;

INSERT INTO
    brands (name, description)
VALUES
    ("Dior", "Since 1880"),
    ("Chanel", "Since 1933"),
    ("YSL", "Cool and active");