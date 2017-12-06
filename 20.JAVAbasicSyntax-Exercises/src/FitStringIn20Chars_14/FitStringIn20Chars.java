package FitStringIn20Chars_14;

import java.util.Scanner;

public class FitStringIn20Chars {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        System.out.println(padRight(20, input, '*'));
    }

    static String padRight(Integer $length, String input, char $symbol) {
        String output = "";

        char[] chars = new char[$length];
        for (int i = 0; i < chars.length; i++) {
            chars[i] = $symbol;
        }

        Integer index = 0;
        for (char ch : input.toCharArray()) {
            if (index < $length) {
                chars[index] = ch;
            }
            index++;
        }

        for (int i = 0; i < chars.length; i++) {
            output += chars[i];
        }

        return output;
    }
}
