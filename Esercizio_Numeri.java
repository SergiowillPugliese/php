import java.util.Scanner;

public class Esercizio_Numeri {
    public static void main(String[] args) {
        Scanner tastiera = new Scanner(System.in);
        System.out.println("Inserisci un numero di 10 cifre");
        String n = tastiera.nextLine();
        boolean verifica = false;

        for (int i = 0; i < n.length(); i++) {
            int b = 1;
            if (n.charAt(i) < n.charAt(b)) {
                verifica = true;
                b++;
            } else if (n.charAt(i) > n.charAt(b)){
                verifica = false;
                b++;
            } else {
                System.out.println("non sono in ordine");
            }
            if (verifica == true) {
                System.out.println("sono in ordine crescente"); 
            } else {
                System.out.println("sono in ordine decrescente");
            }
        }

    }
}
