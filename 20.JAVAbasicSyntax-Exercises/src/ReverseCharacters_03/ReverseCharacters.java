package ReverseCharacters_03;

import java.util.ArrayList;
import java.util.Scanner;

public class ReverseCharacters {
    public static void main(String[] args) {
        ArrayList arr = new ArrayList();
        Scanner scanner = new Scanner(System.in);

        arr.add(scanner.nextLine().trim());
        arr.add(scanner.nextLine().trim());
        arr.add(scanner.nextLine().trim());

        for (int i = arr.size() - 1; i >= 0 ; i--) {
            System.out.print(arr.get(i));
        }
    }
}
