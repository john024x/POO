from car import Car
if __name__ == "__main__":
    print("Hola mundo")
    car = Car()
    car.licence = "KIA8767"
    car.driver = "Juan Fuentes"
    print(vars(car))
    
    car2 = Car()
    car2.licence = "LOP8978"
    car2.driver = "Angel Leon"
    print(vars(car2))