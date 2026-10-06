/* ===== Reset & Base ===== */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: "Segoe UI", Arial, sans-serif;
    color: #2b2b2b;
    background-color: #f5f6f8;
    line-height: 1.5;
}

a {
    color: #2e7d32;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* ===== Header & Navbar ===== */
header {
    background-color: #2e7d32;
    color: #fff;
    padding: 1rem 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

header h1 {
    font-size: 1.4rem;
}

header nav ul {
    list-style: none;
    display: flex;
    gap: 1.25rem;
}

header nav a {
    color: #fff;
    font-weight: 500;
}

.auth-status {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: #fff;
}

.auth-status a {
    color: #fff;
    text-decoration: underline;
}

/* ===== Tombol Menu ===== */
.nav-toggle-label {
    display: none;
    padding: 0.4rem 0.7rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* ===== Main Layout ===== */
main {
    max-width: 1000px;
    margin: 2rem auto;
    padding: 0 1.5rem;
}

section {
    background-color: #fff;
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
}

section h2 {
    margin-bottom: 1rem;
    color: #2e7d32;
}

/* ===== Halaman Login ===== */
.login-section {
    width: 100%;
    max-width: 660px;
    margin: 2rem auto !important;
}

.login-section form {
    max-width: 450px;
}

.login-section input {
    width: 100%;
    max-width: 450px;
}

.login-section button {
    padding: 0.55rem 1rem;
    border: none;
    border-radius: 4px;
    background-color: #2e7d32;
    color: #fff;
    cursor: pointer;
}

.login-section button:hover {
    background-color: #256b29;
}

/* ===== Form ===== */
form p {
    margin-bottom: 1rem;
}

label {
    font-weight: 500;
}

input,
select {
    padding: 0.55rem 0.65rem;
    border: 1px solid #c8cdd2;
    border-radius: 4px;
    font-size: 1rem;
    max-width: 500px;
}

input:focus,
select:focus {
    outline: 2px solid #a5d6a7;
    border-color: #2e7d32;
}

form button {
    padding: 0.55rem 1rem;
    border: none;
    border-radius: 4px;
    background-color: #2e7d32;
    color: #fff;
    cursor: pointer;
}

form button:hover {
    background-color: #256b29;
}

/* ===== Kartu Statistik ===== */
main section:nth-of-type(2) {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
}

main section:nth-of-type(2) article {
    background-color: #e8f5e9;
    border-radius: 8px;
    padding: 1.25rem;
    text-align: center;
}

main section:nth-of-type(2) article h3 {
    font-size: 0.95rem;
    color: #4f6b52;
    margin-bottom: 0.5rem;
}

main section:nth-of-type(2) article p {
    font-size: 1.8rem;
    font-weight: 700;
    color: #2e7d32;
}

/* ===== Tabel ===== */
table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    text-align: left;
    padding: 0.65rem 0.75rem;
    border-bottom: 1px solid #e2e6ea;
}

thead {
    background-color: #2e7d32;
    color: #fff;
}

tbody tr:nth-child(even) {
    background-color: #f4faf4;
}

tbody tr:hover {
    background-color: #e8f5e9;
}

td button {
    padding: 0.35rem 0.7rem;
    margin-right: 0.35rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.85rem;
}

/* ===== Tombol Edit & Hapus ===== */
.btn-edit {
    display: inline-block;
    padding: 0.35rem 0.7rem;
    margin-right: 0.35rem;
    border-radius: 4px;
    background-color: #2e7d32;
    color: #fff;
}

.btn-edit:hover {
    background-color: #256b29;
    text-decoration: none;
}

.btn-hapus {
    background-color: #c62828;
    color: #fff;
}

.btn-hapus:hover {
    background-color: #a91f1f;
}

/* ===== Form Hapus ===== */
.form-hapus {
    display: inline;
}

/* ===== Search ===== */
.search-box {
    margin-bottom: 1rem;
}

.search-box form {
    display: flex;
    align-items: end;
    gap: 0.75rem;
}

.search-box input {
    width: 250px;
}

.search-box button {
    padding: 0.55rem 1rem;
}

/* ===== Table Responsive ===== */
.table-responsive {
    width: 100%;
    overflow-x: auto;
}

/* ===== Pagination ===== */
.pagination {
    display: flex;
    gap: 0.4rem;
    margin-top: 1rem;
    flex-wrap: wrap;
}

.pagination a {
    padding: 0.4rem 0.7rem;
    border: 1px solid #c8ddca;
    border-radius: 4px;
    background-color: #fff;
}

.pagination a.active {
    background-color: #2e7d32;
    color: #fff;
}

/* ===== Flash Message ===== */
.flash {
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    border-radius: 5px;
}

.flash-success {
    background-color: #e8f5e9;
    color: #256b29;
    border: 1px solid #a5d6a7;
}

.flash-error {
    background-color: #ffebee;
    color: #b71c1c;
    border: 1px solid #ef9a9a;
}

/* ===== Footer ===== */
footer {
    max-width: 1000px;
    margin: 0 auto;
    padding: 1rem 1.5rem 2rem;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
    header {
        gap: 1rem;
    }

    header nav {
        width: 100%;
        order: 3;
    }

    header nav ul {
        flex-direction: column;
        gap: 0.5rem;
    }

    .nav-toggle-label {
        display: block;
    }

    main section:nth-of-type(2) {
        grid-template-columns: 1fr;
    }

    .search-box form {
        flex-direction: column;
        align-items: stretch;
    }

    .search-box input {
        width: 100%;
    }

    .login-section {
        max-width: 100%;
    }

    .login-section form {
        max-width: 100%;
    }

    .login-section input {
        max-width: 100%;
    }
}

@media (max-width: 480px) {
    header {
        padding: 1rem;
    }

    header h1 {
        font-size: 1.1rem;
    }

    main {
        padding: 0 1rem;
        margin: 1rem auto;
    }

    section {
        padding: 1rem;
    }

    .login-section {
        margin: 1rem auto !important;
    }

    table {
        font-size: 0.9rem;
    }
}