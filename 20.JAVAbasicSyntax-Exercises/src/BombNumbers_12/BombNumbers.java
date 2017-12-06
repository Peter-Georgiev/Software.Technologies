package BombNumbers_12;

import java.util.ArrayList;
import java.util.Scanner;

public class BombNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        ArrayList<Integer> numbers = inputTolist(scanner.nextLine().split("\\s"));

        int bomb = scanner.nextInt();
        int power = scanner.nextInt();

        while (numbers.indexOf(bomb) >= 0) {
            explode(numbers, bomb, power);
        }

        System.out.println(sum(numbers));
    }

    static int sum(ArrayList<Integer> numbers) {
        int sum = 0;

        for (int i = 0; i < numbers.size(); i++) {
            sum += numbers.get(i);
        }

        return sum;
    }

    static void explode(ArrayList<Integer> numbers, int bomb, int power) {
        int bombIndex = numbers.indexOf(bomb);
        int removalIndex = bombIndex - power;
        int deletionsCount = power * 2 + 1;

        if (removalIndex < 0) {
            deletionsCount += removalIndex;
            removalIndex = 0;
        }

        while (deletionsCount > 0 && removalIndex < numbers.size()) {
            numbers.remove(removalIndex);
            deletionsCount--;
        }
    }

    static ArrayList<Integer> inputTolist(String[] strings) {
        ArrayList<Integer> numbers = new ArrayList<>();

        for (int i = 0; i < strings.length; i++) {
            numbers.add(Integer.parseInt(strings[i]));
        }

        return numbers;
    }
}