import java.util.*;
import java.lang.Math;

public class JavaApplication {
    private static Scanner input = new Scanner(System.in);

    public static void main(String[] args) {
        // This program calculates net pay and produces a Payroll Report. It can only be run once.
        String name;
        
        // In Flowgorithm you can combine declarations as long as they are the SAME data type.
        double gross, deduct, net, rATE;
        
        rATE = 0.25;
        System.out.println("Your name");
        name = input.nextLine();
        System.out.println("Your Gross");
        gross = input.nextDouble();
        System.out.println("Payroll Report");
        System.out.println("Name     Gross     Deductions     Net: ");
        deduct = gross * rATE;
        net = gross - deduct;
        System.out.println(name + "     " + gross + "          " + deduct + "             " + net);
        System.out.println("***End of Report");
    }
}
