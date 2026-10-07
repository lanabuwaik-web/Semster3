-- Jobsheet 8: skema awal database sistem_kost (PostgreSQL)
-- Jalankan setelah membuat database sistem_kost.

CREATE TABLE IF NOT EXISTS kamar (
    id SERIAL PRIMARY KEY,
    nomor_kamar VARCHAR(50) NOT NULL UNIQUE,
    harga INTEGER NOT NULL,
    status VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS penghuni (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    nomor_kamar VARCHAR(50) NOT NULL,
    no_hp VARCHAR(30)
);