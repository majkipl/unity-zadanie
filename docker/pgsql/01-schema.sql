CREATE TABLE authors
(
    id        SERIAL PRIMARY KEY,
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
