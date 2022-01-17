# This program calculates net pay and produces a Payroll Report. It can only be run once.
# In Flowgorithm you can combine declarations as long as they are the SAME data type.
rATE = 0.25
print("Your name")
name = input()
print("Your Gross")
gross = float(input())
print("Payroll Report")
print("Name     Gross     Deductions     Net: ")
deduct = gross * rATE
net = gross - deduct
print(name + "     " + str(gross) + "          " + str(deduct) + "             " + str(net))
print("***End of Report")
