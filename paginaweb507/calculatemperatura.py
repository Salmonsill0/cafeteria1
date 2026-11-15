print("---CONVERSOR DE TEMPERATURA---")
temp = float(input("ESCRIBE LA TEMPERATURA"))
tipo = input("¿CELCIUS(C) O FAHRENHEIT (F)? :")
if tipo.upper() == "C" :
    resultado = (temp * 9/5) + 32
    print(f"{temp} °C = {resultado} °F")
else:
    resultado = (temp - 32) * 5/9
    print("f2{temp} °F = {resultado} °C")