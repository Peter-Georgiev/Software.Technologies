package VowelOrDigit_04;

import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String output = "";
        switch (scanner.nextLine().trim().toLowerCase()) {
            case "a":
            case "e":
            case "i":
            case "o":
            case "u":
                output = "vowel";
                break;
            case "0":
            case "1":
            case "2":
            case "3":
            case "4":
            case "5":
            case "6":
            case "7":
            case "8":
            case "9":
                output = "digit";
                break;
            default:
                output = "other";
                break;
        }

        System.out.println(output);
    }
}
