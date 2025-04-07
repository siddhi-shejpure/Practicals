import pandas as pd
from sklearn.impute import SimpleImputer

# Load the dataset
data = pd.read_csv(r"C:\Users\siddh\Downloads\Iris.csv")

# Check for missing values
print("Missing values before imputation:\n", data.isnull().sum())

# Selecting only numerical columns for imputation
num_columns = data.select_dtypes(include=['float64', 'int64']).columns

# Create an imputer object with a strategy to replace NaN values with the mean
imputer = SimpleImputer(strategy='mean')

# Apply imputer to numerical columns
data[num_columns] = imputer.fit_transform(data[num_columns])

# Check for missing values after imputation
print("\nMissing values after imputation:\n", data.isnull().sum())

# Save the cleaned dataset (optional)
data.to_csv('Iris_cleaned.csv', index=False)

# Display a few rows to verify
print("\nDataset after handling missing values:\n", data.head())
