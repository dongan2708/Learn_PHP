CREATE TABLE book(
                     author VARCHAR(128),
                     title VARCHAR(128),
                     type VARCHAR(16),
                     year CHAR(4),
                     isbn CHAR(13) PRIMARY KEY );
INSERT INTO book (author, title, type, year, isbn) VALUE ('Mark Twain', 'The Adventures of Tom Sawyer', 'Fiction', '1876', '9781598184891');
INSERT INTO book (author, title, type, year, isbn) VALUE ('Jane Austen', 'Pride and Prejudice', 'Fiction', '1811', '9780582506206');
INSERT INTO book (author, title, type, year, isbn) VALUE ('Charles Darwin', 'The Origin of Species', 'Non-Fiction', '1856', '9780517123201');
INSERT INTO book (author, title, type, year, isbn) VALUE ('Charles Dickens', 'The Old Curiosity Shop', 'Fiction', '1841', '9780099533474');
INSERT INTO book (author, title, type, year, isbn) VALUE ('William Shakespeare', 'Romeo and Juliet', 'Play', '1594', '9780192814968');
