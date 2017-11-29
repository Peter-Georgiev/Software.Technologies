package VariableInHexadecimalFormt_01;

import java.util.Scanner;

public class VariableInHexadecimalFormt {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println(Integer.parseInt(scanner.nextLine(), 16));
    }
}
