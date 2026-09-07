package Tugas;
public class Anggota {
    private String nomorKTP;
    private String nama;
    private int limitPinjaman;
    private int jumlahPinjaman;

    public Anggota(String nomorKTP, String nama, int limitPinjaman) {
        this.nomorKTP = nomorKTP;
        this.nama = nama;
        this.limitPinjaman = limitPinjaman;
        this.jumlahPinjaman = 0;
    }

    public String getNomorKTP() {
        return nomorKTP;
    }

    public String getNama() {
        return nama;
    }

    public int getLimitPinjaman() {
        return limitPinjaman;
    }

    public int getJumlahPinjaman() {
        return jumlahPinjaman;
    }

    public void pinjam(int jumlah) {
        if (jumlahPinjaman + jumlah <= limitPinjaman) {
            jumlahPinjaman += jumlah;
        } else {
            System.out.println("Maaf, jumlah pinjaman melebihi limit.");
        }
    }

    public void angsur(int jumlah) {
    int minimalAngsuran = jumlahPinjaman * 10 / 100;

    if (jumlah < minimalAngsuran) {
        System.out.println("Maaf, angsuran harus 10% dari jumlah pinjaman");
    } else {
        jumlahPinjaman -= jumlah;
    }
}
}