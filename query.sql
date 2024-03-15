-- Zadanie 2.1

CREATE TABLE authors
(
    id         SERIAL PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name  VARCHAR(255) NOT NULL
);

CREATE TABLE books
(
    id                  SERIAL PRIMARY KEY,
    author_id           INTEGER REFERENCES authors (id) ON DELETE CASCADE,
    title               VARCHAR(255)       NOT NULL,
    year_of_publication SMALLINT           NOT NULL,
    isbn                VARCHAR(13) UNIQUE NOT NULL
);

CREATE TABLE reviews
(
    id      SERIAL PRIMARY KEY,
    book_id INTEGER REFERENCES books (id) ON DELETE CASCADE,
    rating  INTEGER CHECK (rating BETWEEN 1 AND 10),
    content TEXT
);

-- Zadanie 2.2
SELECT a.first_name, a.last_name, COUNT(b.id) AS number_of_books
FROM authors a
         LEFT JOIN books b ON a.id = b.author_id
GROUP BY a.id;

-- Zadanie 2.3
CREATE VIEW top_authors AS
SELECT a.id, a.first_name, a.last_name, AVG(r.rating) AS average_rating
FROM authors a
         JOIN books b ON a.id = b.author_id
         JOIN reviews r ON b.id = r.book_id
GROUP BY a.id
ORDER BY AVG(r.rating) DESC LIMIT 5;