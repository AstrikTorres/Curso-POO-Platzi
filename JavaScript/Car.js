/* Syntax prototype
function Car(license, driver) {
    this.id;
    this.license = license;
    this.driver = driver;
    this.passenger;
}

Car.prototype.printData = function () {
    console.log("License: " + this.license
        + "\nDriver name: " + this.driver.name
        + "\nDriver document: " + this.driver.document);
} */

// Syntax class of ES6
class Car {
    constructor(license, driver) {
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }

    printDataCar() {
        console.log("License: " + this.license
            + "\nDriver name: " + this.driver.name
            + "\nDriver document: " + this.driver.document);
    }
}