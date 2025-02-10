CREATE DATABASE LibraryDB;
USE LibraryDB;

-- Tabella authors (autori dei libri)
CREATE TABLE authors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    birth_date DATE,
    nationality VARCHAR(50)
);

-- Tabella books (libri della biblioteca)
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author_id INT,
    published_year INT,
    genre VARCHAR(100),
    available BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (author_id) REFERENCES authors(id) ON DELETE SET NULL
);

-- Tabella loans (prestiti)
CREATE TABLE loans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT,
    borrower_name VARCHAR(150) NOT NULL,
    loan_date DATE NOT NULL,
    return_date DATE,
    returned BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (book_id) REFERENCES books(id) ON DELETE CASCADE
);

-- Inserimento dati nella tabella authors
INSERT INTO authors (name, surname, birth_date, nationality) VALUES
('J.K.', 'Rowling', '1965-07-31', 'British'),
('George', 'Orwell', '1903-06-25', 'British'),
('Harper', 'Lee', '1926-04-28', 'American'),
('Jane', 'Austen', '1775-12-16', 'British'),
('Mark', 'Twain', '1835-11-30', 'American'),
('Stephen', 'King', '1947-09-21', 'American'),
('Agatha', 'Christie', '1890-09-15', 'British'),
('Ernest', 'Hemingway', '1899-07-21', 'American');

-- Inserimento dati nella tabella books
INSERT INTO books (title, author_id, published_year, genre, available) VALUES
('Harry Potter and the Philosopher\'s Stone', 1, 1997, 'Fantasy', TRUE),
('Harry Potter and the Chamber of Secrets', 1, 1998, 'Fantasy', TRUE),
('1984', 2, 1949, 'Dystopian', TRUE),
('Animal Farm', 2, 1945, 'Political Satire', TRUE),
('To Kill a Mockingbird', 3, 1960, 'Fiction', TRUE),
('Pride and Prejudice', 4, 1813, 'Romance', TRUE),
('Emma', 4, 1815, 'Romance', TRUE),
('The Adventures of Tom Sawyer', 5, 1876, 'Adventure', TRUE),
('The Adventures of Huckleberry Finn', 5, 1884, 'Adventure', TRUE),
('The Shining', 6, 1977, 'Horror', TRUE),
('It', 6, 1986, 'Horror', TRUE),
('Murder on the Orient Express', 7, 1934, 'Mystery', TRUE),
('And Then There Were None', 7, 1939, 'Mystery', TRUE),
('The Old Man and the Sea', 8, 1952, 'Fiction', TRUE),
('For Whom the Bell Tolls', 8, 1940, 'War Fiction', TRUE);

-- Inserimento dati nella tabella loans
INSERT INTO loans (book_id, borrower_name, loan_date, return_date, returned) VALUES
(1, 'Alice Johnson', '2025-01-15', '2025-02-15', FALSE),
(2, 'Bob Smith', '2025-01-10', '2025-02-10', TRUE),
(3, 'Charlie Brown', '2025-02-01', '2025-03-01', FALSE),
(4, 'Diana Prince', '2025-01-20', '2025-02-20', FALSE),
(5, 'Edward Cullen', '2025-02-05', '2025-03-05', FALSE),
(6, 'Frodo Baggins', '2025-01-25', '2025-02-25', FALSE),
(7, 'Gandalf Grey', '2025-01-12', '2025-02-12', TRUE),
(8, 'Hermione Granger', '2025-01-30', '2025-02-28', FALSE),
(9, 'Indiana Jones', '2025-02-02', '2025-03-02', FALSE),
(10, 'Jack Sparrow', '2025-01-18', '2025-02-18', FALSE),
(11, 'Katniss Everdeen', '2025-01-28', '2025-02-28', FALSE),
(12, 'Lara Croft', '2025-01-14', '2025-02-14', TRUE),
(13, 'Marty McFly', '2025-01-31', '2025-02-28', FALSE),
(14, 'Neo Anderson', '2025-02-06', '2025-03-06', FALSE),
(15, 'Obi-Wan Kenobi', '2025-01-22', '2025-02-22', FALSE);
