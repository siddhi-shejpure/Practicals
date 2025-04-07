def is_prime(n):
    if n <= 1:
        return False
    for i in range(2, int(n**0.5) + 1):
        if n % i == 0:
            return False
    return True

def factorial(n):
    if n < 0:
        return "Factorial not defined for negative numbers."
    fact = 1
    for i in range(1, n + 1):
        fact *= i
    return fact

# Menu-driven program
while True:
    print("\n===== MENU =====")
    print("1. Check Prime Number")
    print("2. Find Factorial")
    print("3. Exit")
    
    choice = input("Enter your choice (1-3): ")

    if choice == '1':
        num = int(input("Enter a number to check if it's prime: "))
        if is_prime(num):
            print(f"{num} is a Prime Number.")
        else:
            print(f"{num} is NOT a Prime Number.")
    
    elif choice == '2':
        num = int(input("Enter a number to find factorial: "))
        print(f"Factorial of {num} is {factorial(num)}")
    
    elif choice == '3':
        print("Exiting the program.")
        break
    
    else:
        print("Invalid choice! Please enter 1, 2 or 3.")
