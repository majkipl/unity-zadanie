INSERT INTO authors (first_name, last_name)
SELECT
    'Firstname_' || id,
    'Lastname_' || id
FROM
    generate_series(1, 10) AS id;

INSERT INTO books (author_id, title, year_of_publication, isbn)
SELECT
    floor(random() * 10) + 1,
    'Title_' || id,
    floor(random() * (2024-1900+1)) + 1900,
    substring(md5(random()::text), 1, 13)
FROM
    generate_series(1, 50) AS id;

INSERT INTO reviews (book_id, rating, content)
SELECT
    floor(random() * 50) + 1,
    floor(random() * 10) + 1,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
FROM
    generate_series(1, 100);