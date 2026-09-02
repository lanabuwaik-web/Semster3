public class DragonMain {
    public static void main(String[] args) {
        Dragon dragon1 = new Dragon();
        Dragon dragon2 = new Dragon();

        dragon1.changeDirection(2);
        dragon1.move(2);
        dragon1.printStatus();

        System.out.println();

        dragon2.changeDirection(1);
        dragon2.move(3);
        dragon2.printStatus();
    }
}
