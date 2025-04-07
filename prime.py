# Function to check if a number is prime
def is_prime(num):
    if num <= 1:
        return False  # 0 and 1 are not prime numbers
    for i in range(2, int(num ** 0.5) + 1):  # Check divisibility up to sqrt(num)
        if num % i == 0:
            return False  # Number is divisible by i, so it's not prime
    return True  # If no divisors found, it's prime

# Get user input
num = int(input("Enter a number: "))

# Check and display result
if is_prime(num):
    print(f"{num} is a Prime number.")
else:
    print(f"{num} is not a Prime number.")
