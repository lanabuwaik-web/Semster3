-- Jobsheet 10: skema awal database sistem_kost (PostgreSQL)
-- Database: sistem_kost

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

CREATE TABLE IF NOT EXISTS users (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) NOT NULL DEFAULT 'petugas'
);