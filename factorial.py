# Get user input
num = int(input("Enter a number: "))

# Initialize factorial variable
factorial = 1

# Check if the number is negative, zero, or positive
if num < 0:
    print("Factorial is not defined for negative numbers.")
elif num == 0 or num == 1:
    print(f"Factorial of {num} is 1.")
else:
    for i in range(1, num + 1):
        factorial *= i
    print(f"Factorial of {num} is {factorial}.")
