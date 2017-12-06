package CompareCharArrays_06;

import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] charArrOne = stringToChar(scanner.nextLine().trim());
        char[] charArrTwo = stringToChar(scanner.nextLine().trim());

        Integer sum1 = sumCharArray(charArrOne);
        Integer sum2 = sumCharArray(charArrTwo);


        if (sum1 < sum2) {
            for (int i = 0; i < charArrOne.length; i++) {
                System.out.print(charArrOne[i]);
            }
            System.out.println();

            for (int i = 0; i < charArrTwo.length; i++) {
                System.out.print(charArrTwo[i]);
            }
            System.out.println();

        } else {
            for (int i = 0; i < charArrTwo.length; i++) {
                System.out.print(charArrTwo[i]);
            }
            System.out.println();

            for (int i = 0; i < charArrOne.length; i++) {
                System.out.print(charArrOne[i]);
            }
            System.out.println();
        }
    }

    static int sumCharArray(char[] arr) {
        int sum = 0;

        for (int i = 0; i < arr.length; i++) {
            sum += (int) arr[i];
        }

        return sum;
    }

    static char[] stringToChar(String str) {
        String[] arr = str.split(" ");
        char[] chars = new char[arr.length];

        for (int i = 0; i < arr.length; i++) {
            chars[i] = arr[i].charAt(0);
        }

        return chars;
    }
}
