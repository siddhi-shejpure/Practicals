# Function to check if a number is an Armstrong number
def is_armstrong(num):
    # Convert number to string to count digits
    num_str = str(num)
    num_digits = len(num_str)
    
    # Calculate sum of digits each raised to the power of the number of digits
    armstrong_sum = sum(int(digit) ** num_digits for digit in num_str)
    
    # Check if sum is equal to the original number
    return armstrong_sum == num

# Get user input
num = int(input("Enter a number: "))

# Check and display result
if is_armstrong(num):
    print(f"{num} is an Armstrong number.")
else:
    print(f"{num} is not an Armstrong number.")
