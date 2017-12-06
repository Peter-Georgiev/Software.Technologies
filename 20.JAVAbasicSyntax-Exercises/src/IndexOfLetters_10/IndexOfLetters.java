package IndexOfLetters_10;

import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine().trim();

        char[] letters = new char[26];
        for (int i = 0; i < 26; i++) {
            letters[i] = (char) (i + 97);
        }

        for (char c : input.toCharArray()) {
            for (int i = 0; i < letters.length; i++) {
                if (c == letters[i]) {
                    System.out.println(c + " -> " + i);
                }
            }
        }
    }
}
