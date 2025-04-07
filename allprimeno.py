# Program to print all prime numbers in an interval

# Input from user
start = int(input("Enter start of interval: "))
end = int(input("Enter end of interval: "))

print(f"Prime numbers between {start} and {end} are:")

for num in range(start, end + 1):
    if num > 1:  # 1 is not a prime
        for i in range(2, int(num ** 0.5) + 1):
            if num % i == 0:
                break
        else:
            print(num, end=" ")
