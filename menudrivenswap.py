import random

def swap_numbers(a, b):
    print(f"\nBefore Swap: a = {a}, b = {b}")
    a, b = b, a
    print(f"After Swap: a = {a}, b = {b}")

def generate_random_number():
    lower = int(input("Enter lower limit: "))
    upper = int(input("Enter upper limit: "))
    if lower > upper:
        print("Invalid range! Lower limit should be less than upper limit.")
        return
    rand_num = random.randint(lower, upper)
    print(f"Random number between {lower} and {upper}: {rand_num}")

# Menu-driven program
while True:
    print("\n===== MENU =====")
    print("1. Swap Two Numbers")
    print("2. Generate Random Number")
    print("3. Exit")

    choice = input("Enter your choice (1-3): ")

    if choice == '1':
        a = int(input("Enter first number (a): "))
        b = int(input("Enter second number (b): "))
        swap_numbers(a, b)

    elif choice == '2':
        generate_random_number()

    elif choice == '3':
        print("Exiting the program. Goodbye! 👋")
        break

    else:
        print("Invalid choice! Please enter 1, 2, or 3.")
