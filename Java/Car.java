package Java;

class Car {
    // Properties
    Integer id;
    String license;
    Account driver;
    Integer passenger;

    // Methods
    void printData() {
        System.out.println("License: " + license + "\nName Driver: " + driver.name + "\nPassenger: " + passenger);
    }

    // Constructor
    Car(String license, Account driver) {
        this.license = license;
        this.driver = driver;
    }
}
