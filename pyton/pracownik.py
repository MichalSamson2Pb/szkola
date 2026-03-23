class Pracownik:
    def __init__(self, id_p, imie_p, nazwisko_p, nr_zamowienia):
        self.id_p = id_p
        self.imie_p = imie_p
        self.nazwisko_p = nazwisko_p
        self.nr_zamowienia = nr_zamowienia

class Klient:
    def __init__(self, id_k, imie_k, nazwisko_k, telefon, nr_zamowienia):
        self.id_k = id_k
        self.imie_k = imie_k
        self.nazwisko_k = nazwisko_k
        self.telefon = telefon
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