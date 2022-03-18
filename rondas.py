numero = print("Por favor ingrese numero de rondas: ")
rondas = int(input())
jug = print("inserta numero de jugadores")
jugadores = int(input())

if jugadores <= 0:
        print("¡inserta 2 jugadores!")
else:
        print(list(range(jugadores + 1)))

if rondas <= 0:
        print("¡ingresa 5 rondas!")

else:
    print(list(range(rondas + 1)))

