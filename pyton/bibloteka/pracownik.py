import random
from klasa import Pracownik
from klasa import Produkt
from klasa import Magazyn
from klasa import Klient
from klasa import Zamowienie

japko = Produkt("japko", "3", "1")
gołomb = Produkt('gołomb', '41', '2')
masło = Produkt("masło", '5', '1')
agregat_prądotwórczy = Produkt('agregat_prądotwórczy', '6700', '2')
woda_po_ogurkah = Produkt('woda_po_ogurkah', '67' , '1')

m1 = Magazyn('1')
m2 = Magazyn('2')

Łukasz = Pracownik('1', 'Łukasz', 'Michalak', '1')
Sławomir = Pracownik('2', 'Sławomir', 'Matuszewski', '2')
Miłosz = Pracownik('3', 'Miłosz', 'Łabenda', '3')

Szymon = Klient('1', 'Szymon', 'Walkowiak', '1')
Franciszek = Klient('2', 'Franciszek', 'Musielak', '2')
Jędrzej = Klient('3', 'Jędrzej', 'Szukowski', '3')

produkty = [japko, gołomb, masło, agregat_prądotwórczy, woda_po_ogurkah]
pracownicy = [Łukasz, Sławomir, Miłosz]
klienci = [Szymon, Franciszek, Jędrzej]

zamowienia = []

for i in range(1, 101):
    produkt = random.choice(produkty)
    klient = random.choice(klienci)
    pracownik = random.choice(pracownicy)

    zam = Zamowienie(
        nr_zamowienia=str(i),
        koszt=produkt.cena,
        id_k=klient.id_k,
        id_p=pracownik.id_p,
        nazwa=produkt.nazwa
    )

    zamowienia.append(zam)
    
    for z in zamowienia:
        print("Zamówienie nr:", z.nr_zamowienia)
        print("Produkt:", z.nazwa)
        print("Koszt:", z.koszt)
        print("ID klienta:", z.id_k)
        print("ID pracownika:", z.id_p)
        print("----------------------")
