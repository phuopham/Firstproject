use Clarins;

INSERT INTO
    users
VALUES
    (
        "admin",
        "admin@clarins.com",
        01234567890,
        sha1(12345)
    ),
    (
        "user1",
        "user1@clarins.com",
        012345767899,
        sha1(12345)
    ),
    (
        "user2",
        "user2@clarins.com",
        01234567896,
        sha1(123456)
    );

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
    );

INSERT INTO
    brands (name, description)
VALUES
    ("Dior", "Since 1880"),
    ("Chanel", "Since 1933"),
    ("YSL", "Cool and active");

INSERT INTO
    products (
        `name`,
        `catalogID`,
        `description`,
        `brandID`,
        `sell_quantity`,
        `pic1`,
        `pic2`,
        `pic3`,
        `pic4`
    )
VALUES
    (
        "Dior Face Cleaner",
        1,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        1,
        0,
        "/img/product-1.jpg",
        null,
        null,
        null
    ),
    (
        "YSL Shower gel",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "/img/product-2.jpg",
        null,
        null,
        null
    ),
    (
        "Chanel Hair dye purple",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "/img/product-4.jpg",
        null,
        null,
        null
    );