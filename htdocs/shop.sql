CREATE TABLE IF NOT EXISTS album (
album_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
album_name VARCHAR(20) NOT NULL,
artist_id VARCHAR(20) NOT NULL,
item_img VARCHAR(20) NOT NULL,
item_price Decimal(5,2) NOT NULL,
PRIMARY KEY (album_id));

INSERT INTO album (album_id, album_name, artist_id, item_img, item-price)
VALUES
("#102", "Roses in the Snow ", "#ELH4", "img/EmmyLouHarris.jpg", "11.99"),
("#102", "Roses in the Snow ", "#ELH4", "img/EmmyLouHarris.jpg", "11.99"),
("#102", "Roses in the Snow ", "#ELH4", "img/EmmyLouHarris.jpg", "11.99"),
("#102", "Roses in the Snow ", "#ELH4", "img/EmmyLouHarris.jpg", "11.99"),
("#102", "Roses in the Snow ", "#ELH4", "img/EmmyLouHarris.jpg", "11.99"),