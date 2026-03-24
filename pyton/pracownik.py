import random

class Pracownik:
    def __init__(self, id_p, imie_p, nazwisko_p, nr_zamowienia):
        self.id_p = id_p
        self.imie_p = imie_p
        self.nazwisko_p = nazwisko_p
        self.nr_zamowienia = nr_zamowienia

class Klient:
    def __init__(self, id_k, imie_k, nazwisko_k, nr_zamowienia):
        self.id_k = id_k
        self.imie_k = imie_k
        self.nazwisko_k = nazwisko_k
        self.nr_zamowienia = nr_zamowienia

class Produkt:
    def __init__(self, nazwa, cena, nr_magazynu):
        self.nazwa = nazwa
        self.cena = cena
        self.nr_magazynu = nr_magazynu

class Zamowienie:
    def __init__(self, nr_zamowienia, koszt, id_k, id_p, nazwa):
        self.nr_zamowienia = nr_zamowienia
        self.koszt = koszt
        self.id_k = id_k
        self.id_p = id_p
        self.nazwa = nazwa

class Magazyn:
    def __init__(self, nr_magazynu):
        self.nr_magazynu = nr_magazynu

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
