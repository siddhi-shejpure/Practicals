# Convert kilometers to miles

# Conversion factor
KM_TO_MILES = 0.621371

# Input from user
kilometers = float(input("Enter distance in kilometers: "))

# Calculate miles
miles = kilometers * KM_TO_MILES

# Display result
print(f"{kilometers} kilometers is equal to {miles:.2f} miles.")
