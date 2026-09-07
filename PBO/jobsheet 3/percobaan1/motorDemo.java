public class motorDemo {
    public static void main(String[] args) {

       motor motor1 = new motor();
        motor1.setPlatNomor("B 0838 XZ");
        motor1.setKecepatan(50);
        motor1.displayStatus();

        motor motor2 = new motor();
        motor2.setPlatNomor("N 9840 AB");
        motor2.setStatusMesin(true);
        motor2.setKecepatan(40);
        motor2.displayStatus();

        motor motor3 = new motor();
        motor3.setPlatNomor("D 8343 CV");
        motor3.setKecepatan(60);
        motor3.displayStatus();
    }
}
