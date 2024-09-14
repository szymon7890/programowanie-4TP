# Definicja funkcji zlicz_pierwiastki_rownosci przyjmującej jeden parametr 'liczba'
def zlicz_pierwiastki_rownosci(liczba):
    # Tworzymy pustą listę, która będzie przechowywać wyniki
    wynik = []
    
    # Pętla wykonuje się, dopóki 'liczba' jest większa lub równa 1
    while liczba >= 1:
        # Obliczamy całkowity pierwiastek kwadratowy z 'liczba'
        pierwiastek = int(liczba ** 0.5)
        
        # Dodajemy do listy wyników tekst reprezentujący pierwiastek i jego kwadrat
        wynik.append(f"{pierwiastek}^2")
        
        # Odejmujemy kwadrat obliczonego pierwiastka od 'liczba'
        liczba -= pierwiastek ** 2
    
    # Zwracamy listę wyników
    return wynik

# Pobieramy liczbę od użytkownika jako wejście
liczba = int(input("Enter the number of quadrics invested: "))

# Wywołujemy funkcję 'zlicz_pierwiastki_rownosci' z przekazaną liczbą
wynik = zlicz_pierwiastki_rownosci(liczba)

# Wyświetlamy liczbę elementów w liście wyników i samą listę
print(f"Suma wyników: {len(wynik)}, Wynik: {wynik[::+1]}")