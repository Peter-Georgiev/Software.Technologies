package EqualSums_11;

import java.util.Scanner;

public class EqualSums {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] input = scanner.nextLine().split(" ");
        int[] nums = new int[input.length];
        for (int i = 0; i < nums.length; i++)
        {
            nums[i] = Integer.parseInt(input[i]);
        }

        for (int i = 0; i < nums.length; i++)
        {
            int rightSum = 0, leftsum = 0;
            for (int j = 0; j < i; j++)
            {
                leftsum += nums[j];
            }

            for (int j = i + 1; j < nums.length; j++)
            {
                rightSum += nums[j];
            }

            if (leftsum == rightSum)
            {
                System.out.println(i);
                return;
            }
        }

        System.out.println("no");
    }
}
