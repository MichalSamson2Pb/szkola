def costructMap(x,y):
    tab = []
    tab1 = []
    for yi in range(y):
        tab1.append(["[]"])

    for xi in range(x):
        tab.append(tab1)
    return tab

WIDTH = int(input("Podaj szerokość"))
HEIGHT = int(input("Podaj wysokość"))

tab = costructMap(HEIGHT, WIDTH)
for x in tab:
    for y in x:
        print(y[0], end="")
    print()

class mobek:
    def __init__(self, hp, spawnX, spawnY):
        self.hp = hp
        self.spawnX = spawnX
        self.spawnY = sapnwY


mobek = mobek(100, HEIGHT-1, WIDTH-1)

tab[enemy.x][enemy.y] = [E]

for x in tab:
    for y in x:
        print(y, end="")
    print()

