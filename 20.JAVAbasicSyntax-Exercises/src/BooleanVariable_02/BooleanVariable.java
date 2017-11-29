package BooleanVariable_02;

import java.util.Scanner;

public class BooleanVariable {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String readLine = scanner.nextLine().trim().toLowerCase();

        String output = "";
        if (readLine.equals("true")) {
            output = "Yes";
        } else if (readLine.equals("false")) {
            output = "No";
        }

        System.out.println(output);
    }
}
