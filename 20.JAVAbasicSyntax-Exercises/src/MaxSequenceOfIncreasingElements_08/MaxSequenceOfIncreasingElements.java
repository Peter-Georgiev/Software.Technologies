package MaxSequenceOfIncreasingElements_08;

import java.util.Scanner;

public class MaxSequenceOfIncreasingElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] input = scanner.nextLine().split(" ");
        int[] nums = new int[input.length];

        for (int i = 0; i < nums.length; i++) {
            nums[i] = Integer.parseInt(input[i]);
        }

        Integer startIndex = 0, endIndex = 1, currentSequence = 1, maxSequence = 1;

        for (int i = 1; i < nums.length; i++) {
            if (nums[i] > nums[i - 1]) {
                currentSequence++;
                if (currentSequence > maxSequence) {
                    startIndex = i - currentSequence + 1;
                    endIndex = i + 1;
                    maxSequence = currentSequence;
                }
            } else {
                currentSequence = 1;
            }
        }

        for (int i = startIndex; i < endIndex; i++)
        {
            System.out.print( nums[i] + " ");
        }
        System.out.println();
    }
}
