use Clarins;

INSERT INTO
    catalogs (name, category, description)
VALUES
    (
        "Lips",
        "Lips",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Toners",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Cleaners",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Face Primer",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Face Concealer",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Under Eye Concealer",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Foundation",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Blush",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
    (
        "Highlighter",
        "Face",
        "Protect your beauty face with UV-protection and dust resistent"
    ),
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
    ("YSL", "Cool and active"),
    ("Gucci", "Luxirious"),
    ("Nature Republic", "From Korea"),
    ("MAC", "Makeup Art Cosmetics"),
    ("Neutrogena", "Since 1930"),
    ("Nars", "Famous Brand from France"),
    ("Clinique", "Brand from the USA"),
    (
        "Estee Lauder",
        "Sell in more than 150 countries"
    );

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
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Dior Forever",
        1,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        1,
        0,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Dior Forever Perfect Mousse",
        1,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        1,
        0,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Dior La Carte Cadeau",
        1,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        1,
        0,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Dior Forever Skin Glow",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        1,
        0,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Dior Forever Undercover",
        1,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        1,
        0,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "YSL Shower gel",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "YSL Mascara",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "YSL Eyeliner",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "YSL Eyeshadow",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "YSL Eyebrow",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "YSL Hydration",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Chanel Hair dye purple",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Chanel Chance",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Chanel Coco",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Chanel Allure",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Chanel Cristalle",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Chanel Antaeus",
        2,
        "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.",
        3,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Lancome Miracle",
        2,
        "Invidunt lorem justo sanctus clita.",
        5,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Lancome Absolue",
        2,
        "Invidunt lorem justo sanctus clita.",
        5,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Lancome Lipstick",
        2,
        "Invidunt lorem justo sanctus clita.",
        5,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Lancome Eyeliner",
        2,
        "Invidunt lorem justo sanctus clita.",
        5,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Lancome Mascara",
        2,
        "Invidunt lorem justo sanctus clita.",
        5,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Lancome Foundation",
        2,
        "Invidunt lorem justo sanctus clita.",
        5,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "MAC Lipstick",
        2,
        "Invidunt lorem justo sanctus clita.",
        4,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "MAC Eyeliner",
        2,
        "Invidunt lorem justo sanctus clita.",
        4,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "MAC Mascara",
        2,
        "Invidunt lorem justo sanctus clita.",
        4,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "MAC Eyebrow",
        2,
        "Invidunt lorem justo sanctus clita.",
        4,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "MAC Eyeshadow",
        2,
        "Invidunt lorem justo sanctus clita.",
        4,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "MAC Cleanser",
        2,
        "Invidunt lorem justo sanctus clita.",
        4,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Nature Republic Vitapair C Foam Cleanser",
        2,
        "Invidunt lorem justo sanctus clita.",
        7,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Nature Republic Smoothing & Moisture Aloe Vera Foam Cleanser",
        2,
        "Invidunt lorem justo sanctus clita.",
        7,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Nature Republic Good Skin",
        2,
        "Invidunt lorem justo sanctus clita.",
        7,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Nature Republic Vitapair C Mask Sheet",
        2,
        "Invidunt lorem justo sanctus clita.",
        7,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Nature Republic Real Nature Mask Sheet",
        2,
        "Invidunt lorem justo sanctus clita.",
        7,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Nature Republic Daily Sun Block",
        2,
        "Invidunt lorem justo sanctus clita.",
        7,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        " L'Oreal Lipstick",
        2,
        "Invidunt lorem justo sanctus clita.",
        12,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        " L'Oreal Lip Liner",
        2,
        "Invidunt lorem justo sanctus clita.",
        12,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        " L'Oreal Dry Skin",
        2,
        "Invidunt lorem justo sanctus clita.",
        12,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        " L'Oreal Fine Lines & Wrinkles",
        2,
        "Invidunt lorem justo sanctus clita.",
        12,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        " L'Oreal Bonding",
        2,
        "Invidunt lorem justo sanctus clita.",
        12,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        " L'Oreal Color Treated Hair",
        2,
        "Invidunt lorem justo sanctus clita.",
        12,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Clinique Moisturizing Gel",
        2,
        "Invidunt lorem justo sanctus clita.",
        15,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Clinique Smart Repair ",
        2,
        "Invidunt lorem justo sanctus clita.",
        15,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Clinique Eye Cream ",
        2,
        "Invidunt lorem justo sanctus clita.",
        15,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Clinique Cleansing Balm ",
        2,
        "Invidunt lorem justo sanctus clita.",
        15,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Clinique Face Protector ",
        2,
        "Invidunt lorem justo sanctus clita.",
        15,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    ),
    (
        "Clinique Sunscreen Fluid ",
        2,
        "Invidunt lorem justo sanctus clita.",
        15,
        30,
        "img/product-1.jpg",
        "img/product-10.jpg",
        "img/product-16.webp",
        "img/product-20.webp"
    );

INSERT INTO
    `stockroom` (`productID`, `quantity`)
VALUES
    ('1', '30'),
    ('2', '44'),
    ('3', '64'),
    ('1', '21'),
    ('1', '30');

INSERT INTO
    contact (
        'name',
        'email',
        'subject',
        'message',
    )
VALUES
    (
        "Taylor Swift",
        "supergirl@gmail.com",
        "Instagram",
        "very good"
    ),
    (
        "Captain America",
        "badboy01@gmail.com",
        "Twitter",
        "excellent"
    ),
    ("IronMan", "genius@gmail.com", "Facebook", "good");

INSERT INTO
    user_order (name, email, phone, address, paymethod)
VALUES
    (
        "John",
        "0326mes@gmail.com",
        '0123456789',
        "25 Washinton",
        "visa"
    ),
    (
        "Naruto",
        "anime@gmail.com",
        '02345678901',
        "16 Tokyo",
        "credit card"
    );

INSERT INTO
    orders (ordernumber, productID, quantity, price)
VALUES
    ('1', '1', '3', '30'),
    ('1', '3', '2', '35'),
    ('2', '3', '4', '40');

INSERT INTO
    visitorcount(ip)
VALUES
    ('10');