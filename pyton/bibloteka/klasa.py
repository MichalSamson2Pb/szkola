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