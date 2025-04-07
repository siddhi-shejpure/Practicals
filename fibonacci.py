# Print Fibonacci sequence

# Input from user
n_terms = int(input("Enter the number of terms: "))

# First two Fibonacci numbers
a, b = 0, 1
count = 0

print("Fibonacci sequence:")

while count < n_terms:
    print(a, end=" ")
    a, b = b, a + b
    count += 1
