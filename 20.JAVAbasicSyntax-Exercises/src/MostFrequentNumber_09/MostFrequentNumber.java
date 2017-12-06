package MostFrequentNumber_09;

import java.util.Scanner;

public class MostFrequentNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] input = scanner.nextLine().split(" ");
        int[] nums = new int[input.length];

        for (int i = 0; i < nums.length; i++) {
            nums[i] = Integer.parseInt(input[i]);
        }

        int maxFrequent = 1, maxFrequentIndex = 0;

        for (int i = 0; i < nums.length; i++) {

            int currentMax = 0;
            int key = nums[i];

            for (int j = 0; j < nums.length; j++) {
                if (key == nums[j]) {
                    currentMax++;
                }
            }

            if (currentMax > maxFrequent) {
                maxFrequent = currentMax;
                maxFrequentIndex = i;
            }
        }

        System.out.println(nums[maxFrequentIndex]);
    }
}
