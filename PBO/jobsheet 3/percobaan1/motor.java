public class motor {
    private String platNomor;
    private boolean statusMesin;
    private int kecepatan;

    public String getPlatNomor() {
        return platNomor;
    }

    public void setPlatNomor(String platNomor) {
        this.platNomor = platNomor;
    }

    public boolean getStatusMesin() {
        return statusMesin;
    }

    public void setStatusMesin(boolean statusMesin) {
        this.statusMesin = statusMesin;
    }

    public int getKecepatan() {
        return kecepatan;
    }

   public void setKecepatan(int kecepatan) {
    if (kecepatan < 0) {
        System.out.println("Kecepatan tidak boleh negatif");
    } else if (kecepatan > 100) {
        System.out.println("Kecepatan maksimal adalah 100");
    } else if (!statusMesin && kecepatan > 0) {
        System.out.println("Kecepatan tidak boleh lebih dari 0 jika mesin off");
    } else {
        this.kecepatan = kecepatan;
    }
}

    public void displayStatus() {
        System.out.println("Plat Nomor: " + platNomor);
        System.out.println("Status Mesin: " + (statusMesin ? "On" : "Off"));
        System.out.println("Kecepatan: " + kecepatan);
        System.out.println("===========================");
    }
}