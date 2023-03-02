# Harry Potter Kata

## Challenge

Ein Buchhändler hat sich ein neues Rabattsystem für Harry Potter Bücher einfallen lassen. Du sollst dieses Rabattsystem implementieren und für den Kunden immer das günstigste Angebot berechnen.

Aufgabe:

Ein Buch kostet 8€ und es gibt aktuell nur 5 verschiedene Bände.

Beim Kauf von 2 unterschiedlichen Büchern gibt es einen Rabatt von 5%, bei 3 10%, bei 4 20% und bei 5  gibt es 25%  auf diese Bücher. Kauft ein Kunden Bücher (des selben Bandes) mehrfach, kosten diese regulär 8€, außer sie ergeben ein neues Rabattset in Kombination mit anderen Bändern.

Sie sollen dem Kunden das günstigste Angebot berechnen.

Ideal wäre es, wenn wir dein Programm sofort dem Buchhändler zur Begutachtung zur Verfügung stellen könnten. Erstelle dazu eine einfache Webseite mit Eingabefeldern für die Zusammenstellung des Warenkorbs und einer Preisanzeige für den Gesamtpreis des Warenkorbs.

Beispiel:

Warenkorb: 2 x Band 1, 2 x Band 2, 2 x Band 3, 1 x Band 4 und 1 x Band 5.

Das günstigste Angebot für den Kunden ist in diesem Fall 51,20€!

## Lösung

Im Beispiel kauft der Kunde insgesamt 8 Bücher. Diese lassen sich im günstigsten Fall in 2 Reihen unterschiedlicher Bände zusammenstellen:

- Band 1, 2, 3 und 4  
- Band 1, 2, 3 und 5

Dadurch ergeben sich 20 % Rabatt auf die jeweilige Reihe und insgesamt auf jedes Buch:

**8 Bücher á 6.40 Euro = 51.20 Euro**

### Matrix

| UnitTest |  1  |  2  |  3  |  4  |  5  | Formel                                  | Angebot |
|------|-----|-----|-----|-----|-----|-----------------------------------------|---------|
|**A** |  1  |     |     |     |     | 1 * 8									                  |   8.00  |
|**B** |  1  |  1  |     |     |     | 2 * 8 * 0.95							              |  15.20  |
|**C** |  1  |  1  |  1  |     |     | 3 * 8 * 0.9							                |  21.60  |
|**D** |  1  |  1  |  1  |  1  |     | 4 * 8 * 0.8							                |  25.60  |
|**E** |  1  |  1  |  1  |  1  |  1  | 5 * 8 * 0.75							              |  30.00  |
|**F** |  2  |     |     |     |     | 2 * 8									                  |  16.00  |
|**G** |  2  |  1  |     |     |     | 2 * 8 * 0.95 + 1 * 8				          	|  23.20  |
|**H** |  2  |  1  |  1  |     |     | 3 * 8 * 0.90 + 1 * 8					          |  29.60  |
|**J** |  2  |  2  |  2  |  1  |  1  | 4 * 8 * 0.8 + 4 * 8 * 0.8				      	|  51.20  |
|**K** |  5  |  5  |  4  |  5  |  4  | 3 * (5 * 8 * 0.75) + 2 * (4 * 8 * 0.8)	| 141.20  |


## Vorgehen

### Der Algorithmus

Die Herausforderung besteht im Kern darin, einen Algorithmus zu entwickeln, der die im Warenkorb befindlichen Bücher in Sets zusammenstellt, sodass insgesamt der maximale Rabatt gewährt werden kann. D. h. die Bände müssen auf die Sets so verteilt werden, dass die Sets möglichst umfangreich werden. Im Idealfall 5 unterschiedliche Bände pro Set.

### Wahl der richtigen Technologie

Die Berechnung eines Preises, Angebots und/oder eines Rabatts sollte aus Sicherheitsgründen **auf dem Server** erfolgen und NICHT im Browser des Nutzers. Für die Berechnung wird deshalb ein **PHP-Skript** entwickelt.

### Testen

Die Angebotsberechnung ist zudem eine kritische Funktion, die bei einem falschen Ergebnis sowohl beim Anbieter als auch beim Anwender Schaden verursachen kann. Daher muss die Kalkulation zwingend validiert und abgesichert werden. Dazu werden für unterschiedliche Use-Cases **Unit-Tests** implementiert.


## Bekannte Probleme

Unit Test H schlägt fehl. Statt 29.60 wird 30.40 berechnet.
