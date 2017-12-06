package ChangeToUppercase_17;

import java.util.Scanner;

public class ChangeToUppercase {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        while (true) {
            int upperTagOpenIndex = input.indexOf("<upcase>");
            int upperTagCloseIndex = input.indexOf("</upcase>");

            if (upperTagCloseIndex < 0 || upperTagOpenIndex < 0) {
                break;
            }

            String textToReplace = input.substring(upperTagOpenIndex, upperTagCloseIndex + 9);

            input = input.replace(textToReplace, textToReplace.substring(8, textToReplace.length() - 9).toUpperCase());
        }

        System.out.println(input);
    }
}
