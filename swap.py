# Input two numbers
a = int(input("Enter first number: "))
b = int(input("Enter second number: "))

# Swap using a temporary variable
temp = a
a = b
b = temp

# Display result
print("After swapping:")
print("First number:", a)
print("Second number:", b)
