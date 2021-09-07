package Java;

class Main{
    public static void main(String[] args) {
        System.out.println("Hello world!");
        Car car = new Car();
        car.licence = "LJK3233";
        car.driver = "Juan Fuentes";
        car.passengers = 4;
        car.printDataCar();

        Car car2 = new Car();
        car2.licence = "JULO0980";
        car2.driver = "Angel Leon";
        car2.passengers = 5;
        car2.printDataCar();
    }
}