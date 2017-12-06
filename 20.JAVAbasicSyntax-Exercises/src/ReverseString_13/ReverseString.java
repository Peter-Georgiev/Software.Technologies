package ReverseString_13;

        import java.util.Scanner;

public class ReverseString {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] chars = scanner.nextLine().trim().toCharArray();

        for (int i = chars.length - 1; i >= 0 ; i--) {
            System.out.print(chars[i]);

        }
    }
}
