package Java;

public class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");

        Car car = new Car("AMQ-123", new Account("Andres", "AND123") );
        car.passenger = 4;
        car.printData();

        Car car2 = new Car("AMQ-456", new Account("Andrea", "ANDA746") );
        car2.passenger = 2;
        car2.printData();
    }
}
