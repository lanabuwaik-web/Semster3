// ===== Hamburger menu =====
function initNavToggle() {
    const toggleBtn = document.getElementById("nav-toggle-btn");
    const nav = document.querySelector("header nav");
    if (!toggleBtn || !nav) return;

    toggleBtn.addEventListener("click", function () {
        nav.classList.toggle("nav-open");
    });
}

// ===== Konfirmasi hapus =====
function initHapusConfirm() {
    document.addEventListener("click", function (e) {
        const btn = e.target.closest(".btn-hapus");
        if (!btn) return;

        const row = btn.closest("tr");
        const nama = row ? row.querySelector("td")?.textContent : "data ini";

        const yakin = confirm("Yakin ingin menghapus \"" + nama + "\"?");

        if (yakin && row) {
            row.remove();
        }
    });
}

// ===== Filter/pencarian tabel =====
function initTableFilter() {
    const input = document.getElementById("search-input");
    const table = document.querySelector(".table-responsive table");
    if (!input || !table) return;

    input.addEventListener("keyup", function () {
        const keyword = input.value.toLowerCase();
        const rows = table.querySelectorAll("tbody tr");

        rows.forEach(function (row) {
            const teks = row.textContent.toLowerCase();
            row.style.display = teks.includes(keyword) ? "" : "none";
        });
    });
}

// ===== Validasi form =====
function tampilkanError(input, pesan) {
    hapusError(input);

    const span = document.createElement("span");
    span.className = "error";
    span.textContent = pesan;

    input.insertAdjacentElement("afterend", span);
}

function hapusError(input) {
    const next = input.nextElementSibling;

    if (next && next.classList.contains("error")) {
        next.remove();
    }
}

function initValidasiForm() {
    const form = document.getElementById("form-tambah");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        let valid = true;

        // Validasi nama penghuni
        const nama = form.querySelector("[name='nama']");

        if (nama && nama.value.trim() === "") {
            tampilkanError(nama, "Nama wajib diisi.");
            valid = false;
        } else if (nama) {
            hapusError(nama);
        }

        // Validasi nomor kamar
        const nomorKamar = form.querySelector("[name='nomor_kamar']");

        if (nomorKamar && nomorKamar.value.trim() === "") {
            tampilkanError(nomorKamar, "Nomor kamar wajib diisi.");
            valid = false;
        } else if (nomorKamar) {
            hapusError(nomorKamar);
        }

        // Validasi harga kamar
        const harga = form.querySelector("[name='harga']");

        if (harga) {
            const nilai = parseInt(harga.value, 10);

            if (isNaN(nilai) || nilai < 0) {
                tampilkanError(harga, "Harga tidak boleh negatif.");
                valid = false;
            } else {
                hapusError(harga);
            }
        }

        if (!valid) {
            e.preventDefault();
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    initNavToggle();
    initHapusConfirm();
    initTableFilter();
    initValidasiForm();
});